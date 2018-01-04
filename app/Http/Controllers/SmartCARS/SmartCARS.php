<?php

namespace App\Http\Controllers\SmartCARS;


use App\AircraftGroup;
use App\Airline;
use App\Bid;
use App\Classes\FSWireHelpers;
use App\Classes\VAOS_Schedule;
use App\Models\Aircraft;
use App\Models\Airport;
use App\PIREP;
use App\ScheduleTemplate;
use App\SmartCARS_Session;
use App\User;
use Carbon\Carbon;
use GuzzleHttp\Client;

class SmartCARS
{
    static function manuallogin($userid, $password, $sessionid) {
        $user = $userid;
        if(strpos($user, '@') == false) {
            //search user via username
            $type = 'username';
        }
        else {
            //search user via email
            $type = 'email';
        }


        $client = new Client();

        $response = $client->request('POST', url('api/v1/auth'), [
            'query' => [
                'format' => $type
            ],
            'form_params' => [

                'email' => $userid,
                'password' => $password,

            ]
        ])->getBody();

        $jdec = json_decode($response, true);
        if($jdec['status'] == 200 /*password_verify($password, $res['password'])*/) {
            $ret['dbid'] = $jdec['user']['id'];
            $ret['code'] = "";//$res['code'];

            //$newpltid = $res['username'] + PILOTID_OFFSET;
            $var = "";
            //for($i = strlen($newpltid); $i < PILOTID_LENGTH; $i++)
            //	$var .= "0";
            $ret['pilotid'] = $jdec['user']['username'];

            //$ret['pilotid'] = $res['pilotid'] + PILOTID_OFFSET;
            $ret['firstname'] = $jdec['user']['first_name'];
            $ret['lastname'] = $jdec['user']['last_name'];
            $ret['email'] = $jdec['user']['email'];
            $rank = FSWireHelpers::getRankVariables($ret['dbid']);
            $ret['ranklevel'] = $rank['rank_level'];//$res['ranklevel'];
            $ret['rankstring'] = $rank['name'];//$res['rank'];
            $ret['result'] = "ok";
        }
        else
            $ret['result'] = "failed";
        return $ret;
    }

    static function automaticlogin($dbid, $oldsessionid, $sessionid) {
        $ret = array();
        $res1 = SmartCARS_Session::where('dbid', $dbid)->where('sessionid',$oldsessionid)->first();

        if($res1) {
            $res = User::find($dbid);
            if($res) {
                /*
                if(skip_retired_check == false) {
                    if($res['retired'] != "0") {
                        $ret['result'] = "inactive";
                        return $ret;
                    }
                }
                */
                if($res->status == "0") {
                    $ret['result'] = "unconfirmed";
                    return $ret;
                }

                $ret['dbid'] = $res->id;
                $ret['code'] = "";//$res['code'];

                $ret['pilotid'] = $res->username;

                //$ret['pilotid'] = $res['pilotid'] + PILOTID_OFFSET;
                $ret['firstname'] = $res->first_name;
                $ret['lastname'] = $res->last_name;
                $ret['email'] = $res->email;
                $rank = FSWireHelpers::getRankVariables($dbid);
                $ret['ranklevel'] = $rank['rank_level'];//$res['ranklevel'];
                $ret['rankstring'] = $rank['name'];//$res['rank'];
                $ret['result'] = "ok";
            }
            else
                $ret['result'] = "failed";
        }
        else
            $ret['result'] = "failed";
        return $ret;
    }

    static function verifysession($dbid, $sessionid) {
        $ret = array();

        $ret = array();
        $res1 = SmartCARS_Session::where('dbid', $dbid)->where('sessionid',$sessionid)->first();

        if($res1) {
            $res = User::find($dbid);
            if($res && $res->status != 0) {
                $ret['result'] = "SUCCESS";
                $ret['firstname'] = $res->first_name;
                $ret['lastname'] = $res->last_name;
                return $ret;
            }
            else {
                $ret['result'] = "FAILED";
                return $ret;
            }
        }
        else {
            $ret['result'] = "FAILED";
            return $ret;
        }
    }

    static function getpilotcenterdata($dbid) {
        $res = User::find($dbid);
        $ret = array();
        if($res) {
            $ret['totalhours'] = FSWireHelpers::getTotalFlightTime($dbid);
            $ret['totalflights'] = FSWireHelpers::getTotalFlightsFlown($dbid);
            $ret['averagelandingrate'] = FSWireHelpers::getAvgLandingRate($dbid);
            $ret['totalpireps'] = $ret['totalflights'];
            //}
            //else {
            //	$ret['averagelandingrate'] = "N/A";
            //	$ret['totalpireps'] = "0";
            //}
        }
        return $ret;
    }

    static function getairports($dbid) {

        return Airport::orderBy('icao')->get();

    }

    static function getaircraft($dbid) {
        return Aircraft::orderBy('name')->get();
    }

    static function getbidflights($dbid) {

        $client = new Client();

        $response = $client->request('GET', url('api/acars/smartCARS/bids/'. $dbid))->getBody();
        $jdec = json_decode($response, true);
        //var_dump($ret);
        return $jdec;
    }

    static function bidonflight($dbid, $routeid) {
        $schedule = ScheduleTemplate::find($routeid);

        if($schedule) {
            // return 1; Schedule is BIDDED
            $bid = VAOS_Schedule::fileBid($dbid, $routeid);
            if ($bid) {
                return 0;
            }

        }
        return 2;
    }

    static function deletebidflight($dbid, $bidid) {

        return Bid::where('id', $bidid)->where('user_id', $dbid)->delete();

    }

    static function searchpireps($dbid, $departureicao, $arrivalicao, $startdate, $enddate, $aircraft, $status) {
        $query = PIREP::where('user_id', $dbid);

        if($departureicao != '')
        {
            $apt = Airport::where('icao', strtoupper($departureicao))->first();
            $id = ($apt) ? $apt->id : -1;
            $query = $query->where('depapt_id', $id);
        }

        if($arrivalicao != '')
        {
            $apt = Airport::where('icao', strtoupper($arrivalicao))->first();
            $id = ($apt) ? $apt->id : -1;
            $query = $query->where('arrapt_id', $id);
        }

        if($startdate != '')
        {
            $sdate = Carbon::parse($startdate);
            $query = $query->where('created_at', '>=', $sdate);
        }

        if($enddate != '')
        {
            $edate = Carbon::parse($enddate);
            $query = $query->where('created_at', '<=', $edate);
        }

        if($aircraft != '')
        {
            $aircrafts = Aircraft::where('name', $aircraft)->get();
            $ids = $aircrafts->map(function($item){
                return $item->id;
                });
            $query = $query->whereIn('aircraft_id', $ids);
        }

        $ret = $query->with('airline','depapt','arrapt','aircraft')->get();
        return $ret;

    }

    static function getpirepdata($dbid, $pirepid) {
        $pirep = PIREP::find($pirepid);

        $ret = array();
        $ret['duration'] = $pirep->flighttime;
        $ret['landingrate'] = $pirep->landingrate;
        $ret['fuelused'] = $pirep->fuel_used;
        $ret['status'] = $pirep->status;
        $ret['log'] = $pirep->flight_data;

        return $ret;
    }

    static function searchflights($dbid, $departureicao, $mintime, $maxtime, $arrivalicao, $aircraft) {
        $query = ScheduleTemplate::orderby('created_at', 'desc');

        if($departureicao != '')
        {
            $apt = Airport::where('icao', strtoupper($departureicao))->first();
            $id = ($apt) ? $apt->id : -1;
            $query = $query->where('depapt_id', $id);
        }

        if($arrivalicao != '')
        {
            $apt = Airport::where('icao', strtoupper($arrivalicao))->first();
            $id = ($apt) ? $apt->id : -1;
            $query = $query->where('arrapt_id', $id);
        }

        if($aircraft != '')
        {
            $aircrafts = Aircraft::where('name', $aircraft)->with('aircraft_group')->get();
            $ids = $aircrafts->map(function($item){
                return $item->aircraft_group->first()->id;
            });
            $query = $query->whereIn('aircraft_group_id', $ids);
        }

        $ret = $query->with('depapt')->with('arrapt')->with('airline')->with('aircraft_group')->get();
        return $ret;
    }

    static function createflight($dbid, $flightcode, $flightnumber, $ticketprice, $depicao, $arricao, $aircraft, $flighttype, $deptime, $arrtime, $flighttime, $route, $cruisealtitude, $distance) {
        $type = "P";
        if($flighttype == "1")
            $type = "C";

        if($flightcode == '')
            $flightcode = 'FSW';

        $aircraft = Aircraft::where('name',$aircraft)->first();
        $acfgroup = $aircraft->load('aircraft_group')->first();

        VAOS_Schedule::newRoute([
            'depicao' => $depicao,
            'arricao' => $arricao,
            'cruise' => $cruisealtitude,
            'flightnum' => str_limit($flightnumber,4,''),
            'airline' => $flightcode,
            'aircraft_group' => $acfgroup->id,
            'route' => $route

        ]);



        return true;
    }

    static function positionreport($dbid, $flightnumber, $latitude, $longitude, $magneticheading, $trueheading, $altitude, $groundspeed, $departureicao, $arrivalicao, $phase, $arrivaltime, $departuretime, $distanceremaining, $route, $timeremaining, $aircraft, $onlinenetwork) {
        $pilotdet = User::find($dbid);

        $phases = array(
            "Preflight",
            "Pushing Back",
            "Taxiing to Runway",
            "Taking Off",
            "Climbing",
            "Cruising",
            "Descending",
            "Approaching",
            "Final Approach",
            "Landing",
            "Taxiing to Gate",
            "Awaiting Arrival", /* An intermediary state when smartCARS has detected the aircraft is ready to arrive but the pilot hasn't clicked "End Flight" yet. */
            "Arrived"
        );

        $lat = str_replace(",", ".", $latitude);
        $lon = str_replace(",", ".", $longitude);

        $lat = doubleval($lat);
        $lon = doubleval($lon);

        if($lon < 0.005 && $lon > -0.005)
            $lon = 0;

        if($lat < 0.005 && $lat > -0.005)
            $lat = 0;

        $fields = array(
            'pilotid' =>$dbid,
            'flightnum' =>$flightnumber,
            'pilotname' => $pilotdet->first_name . " " . $pilotdet->last_name,
            'aircraft' =>$aircraft,
            'lat' =>$lat,
            'lng' =>$lon,
            'heading' =>$magneticheading,
            'alt' =>$altitude,
            'gs' =>$groundspeed,
            'depicao' =>$departureicao,
            'arricao' =>$arrivalicao,
            'deptime' =>$departuretime,
            'arrtime' =>$arrivaltime,
            'route' =>$route,
            'distremain' =>$distanceremaining,
            'timeremaining' =>$timeremaining,
            'phasedetail' =>$phases[$phase],
            'online' => $onlinenetwork,
            'client' =>'smartCARS',
        );

        $client = new Client();

        $ret = $client->request('POST', '/api/acars/smartCARS/positionreport', [
            'query' => [
                'format' => 'phpVMS'
            ],
            'form_params' => $fields
        ])->getBody();

        $jdec = json_decode($ret, true);
        if ($jdec['status'] == 200)
        {
            return true;
        }
        else
        {
            return false;
        }

        return true;
    }
    static function filepirep($dbid, $code, $flightnumber, $routeid, $bidid, $departureicao, $arrivalicao, $route, $aircraft, $load, $flighttime, $landingrate, $comments, $fuelused, $log) {
        $log = str_replace('[', '*[', $log);
        $log = str_replace('\\r', '', $log);
        $log = str_replace('\\n', '', $log);
        $pirepdata = array(
            'pilotid' => $dbid,
            'code' => $code,
            'flightnum' => $flightnumber,
            'depicao' => $departureicao,
            'arricao' => $arrivalicao,
            'route' => $route,
            'aircraft' => $aircraft,
            'legacyroute' => $routeid,
            'legacybid' => $bidid,
            'load' => $load,
            'flighttime' => $flighttime,
            'landingrate' => $landingrate,
            'submitdate' => date('Y-m-d H:i:s'),
            'comment' => $comments,
            'fuelused' => $fuelused,
            'source' => 'smartCARS',
            'log' => $log
        );

        $client = new Client();

        $ret = $client->request('POST', '/api/acars/smartCARS/filepirep', [
            'query' => [
                'format' => 'phpVMS'
            ],
            'form_params' => $pirepdata
        ])->getBody();

        $jdec = json_decode($ret, true);
        if ($jdec['status'] == 200)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}