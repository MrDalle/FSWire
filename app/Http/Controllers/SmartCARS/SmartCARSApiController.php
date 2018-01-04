<?php


namespace App\Http\Controllers\SmartCARS;


use App\Http\Controllers\Controller;
use App\SmartCARS_Session;
use Carbon\Carbon;
use Illuminate\Http\Request;



class SmartCARSApiController extends Controller
{
    const VERSION = 'official-w3052-3/12/2016';
    const INTERFACE_VERSION = 'vaos-v1.0.3';

    private function clear_old_sessions() {
        SmartCARS_Session::where('timestamp', '<', Carbon::now()->subHour(24)->timestamp)->delete();
    }

    private function write_sessid($pilotid, $sessid) {
        SmartCARS_Session::insert([
            'dbid' => $pilotid,
            'sessionid' => $sessid,
            'timestamp' => Carbon::now()->timestamp
        ]);
    }

    private function check_session($dbid, $sessionid) {
        $res = SmartCARS_Session::where('dbid', $dbid)->where('sessionid', $sessionid)->first();
        if($res)
            return true;
        return false;
    }

    public function index(Request $request)
    {
        $action = $request->get('action');
        switch($action) {
            case "manuallogin":
                $this->clear_old_sessions();
                $res = SmartCARS::manuallogin($request->get('userid'),$request->input('password'),$request->get('sessionid'));
                if($res['result'] == "ok") {
                    $this->write_sessid($res['dbid'], $request->get('sessionid'));
                    $res = str_replace(",","",$res);
                    if($request->get('new') == 'true')
                        return response($res['dbid'] . "," . $res['code'] . "," . $res['pilotid'] . "," . $request->get('sessionid') . "," . $res['firstname'] . "," . $res['lastname'] . "," . $res['email'] . "," . $res['ranklevel'] . "," . $res['rankstring']);
                    else
                        return response($res['dbid'] . "," . $res['code'] . "," . $res['pilotid'] . "," . $request->get('sessionid') . "," . $res['firstname'] . "," . $res['lastname'] . "," . $res['ranklevel'] . "," . $res['rankstring']);
                }
                else if ($res['result'] == "failedid")
                    return response("AUTH_FAILED_ID");
                else
                    return response("AUTH_FAILED");

                break;
            case "automaticlogin":
                $this->clear_old_sessions();
                $res = SmartCARS::automaticlogin($request->get('dbid'),$request->get('oldsessionid'), $request->get('sessionid'));
                if($res['result'] == "ok") {
                    $this->write_sessid($res['dbid'], $request->get('sessionid'));
                    $res = str_replace(",","",$res);
                    if($request->get('new') == 'true')
                        return response($res['dbid'] . "," . $res['code'] . "," . $res['pilotid'] . "," . $request->get('sessionid') . "," . $res['firstname'] . "," . $res['lastname'] . "," . $res['email'] . "," . $res['ranklevel'] . "," . $res['rankstring']);
                    else
                        return response($res['dbid'] . "," . $res['code'] . "," . $res['pilotid'] . "," . $request->get('sessionid') . "," . $res['firstname'] . "," . $res['lastname'] . "," . $res['ranklevel'] . "," . $res['rankstring']);
                }
                else
                    return response("AUTH_FAILED");
                break;
            case "verifysession": //called by the chat server to authenticate users
                $res = SmartCARS::verifysession($request->get('dbid'), $request->get('sessionid'));

                if($res['result'] == "SUCCESS") {
                    $res = str_replace(",","",$res);
                    return response($request->get('sessionid') . "," . $res['firstname'] . "," . $res['lastname']);
                }
                else
                    return response("AUTH_FAILED");
                break;
            case "getpilotcenterdata":
                $res = SmartCARS::getpilotcenterdata($request->get('dbid'));
                if($res['totalflights'] != "") {
                    $res = str_replace(",","",$res);
                    return response($res['totalhours'] . "," . $res['totalflights'] . "," . $res['averagelandingrate'] . "," . $res['totalpireps']);
                }
                else
                    return response("NO_DATA");
                break;
            case "getairports":
                $res = SmartCARS::getairports($request->get('dbid'));

                $result = $res->reduce(function($carry, $next){
                    $name = $next->name;
                    $name = str_replace(";","",$name);
                    $name = str_replace("|","",$name);
                    return $carry . $next->id . "|" . strtoupper($next->icao) . "|" . $name . "|" . $next->lat . "|" . $next->lon . "|" . $next->country . ";" ;
                }, '');

                return response(rtrim($result,'; '));

                break;
            case "getaircraft":
                $res = SmartCARS::getaircraft($request->get('dbid'));
                $result = $res->reduce(function($carry, $next){
                    $name = $next->name;
                    $name = str_replace(";","",$name);
                    $name = str_replace("|","",$name);
                    return $carry . $next->id . "," . $name . "," . $next->icao . "," . $next->registration . "," . $next->maxpax . "," . $next->maxgw . "," . "0;";
                },'');
                return response(rtrim($result,'; '));
                break;
            case "getbidflights":
                $res = collect(SmartCARS::getbidflights($request->get('dbid')));
                if(sizeof($res) > 0) {
                    $result = $res->reduce(function ($carry, $next) {
                        $next = str_replace(";", "", $next);
                        $next = str_replace("|", "", $next);
                        return $carry . $next['bidid']
                            . "|" . $next['routeid']
                            . "|" . $next['code']
                            . "|" . $next['flightnumber']
                            . "|" . $next['departureicao']
                            . "|" . $next['arrivalicao']
                            . "|" . $next['route']
                            . "|" . $next['cruisingaltitude']
                            . "|" . $next['aircraft']
                            . "|" . $next['duration']
                            . "|" . $next['departuretime']
                            . "|" . $next['arrivaltime']
                            . "|" . $next['load']
                            . "|" . $next['type']
                            . "|" . $next['daysofweek'] . ";";
                    }, '');
                    return response(rtrim($result, '; '));
                } else
                    return response("NONE");
                break;
            case "bidonflight":
                if($this->check_session($request->get('dbid'), $request->get('sessionid')) == true) {
                    $ret = SmartCARS::bidonflight($request->get('dbid'),$request->get('routeid'));
                    switch($ret) {
                        case 0:
                            return response("FLIGHT_BID");
                            break;
                        case 1:
                            return response("FLIGHT_ALREADY_BID");
                            break;
                        case 2:
                            return response("INVALID_ROUTEID");
                            break;
                    }
                }
                else
                    return response("AUTH_FAILED");
                break;
            case "deletebidflight":
                if($this->check_session($request->get('dbid'), $request->get('sessionid')) == true) {
                    if (SmartCARS::deletebidflight($request->get('dbid'),$request->get('bidid')))
                        return response("FLIGHT_DELETED");
                    else
                        return response("FLIGHT_NOT_FIND");
                }
                else
                    return response("AUTH_FAILED");
                break;
            case "searchpireps":
                $res = SmartCARS::searchpireps($request->get('dbid'), $request->get('departureicao'), $request->get('arrivalicao'),
                    $request->get('startdate'), $request->get('enddate'), $request->get('aircraft'), $request->get('status'));
                if($res->count()) {
                    $result = $res->reduce(function($carry, $next){
                        return $carry . $next->id . "|" . $next->airline->icao . "|" . $next->flightnum . "|" .
                            $next->created_at->format('mdY') . "|" . $next->depapt->icao . "|" . $next->arrapt->icao . "|" . $next->aircraft->name. ";";
                    }, '');
                    return response(rtrim($result, '; '));
                }
                else
                    return response("NONE");
                break;
            case "getpirepdata":
                $res = SmartCARS::getpirepdata($request->get('dbid'), $request->get('pirepid'));
                $res = str_replace(",","",$res);
                return response($res['duration'] . "," . $res['landingrate'] . "," . $res['fuelused'] . "," . $res['status'] . "," . $res['log']);
                break;
            case "searchflights":
                $res = SmartCARS::searchflights(
                    $request->get('dbid'), $request->get('departureicao'), $request->get('mintime'), $request->get('maxtime'),
                    $request->get('arrivalicao'), $request->get('aircraft'));

                if ($res->count()) {
                    $result = $res->reduce(function ($carry, $next){
                        return $carry . $next->id . "|" . $next->airline->icao . "|" . $next->flightnum . "|" . $next->depapt->icao . "|" .
                            $next->arrapt->icao . "|||" . $next->aircraft_group->name . "||||;";
                    });
                    return response(rtrim($result, '; '));
                } else {
                    return response('NONE');
                }

                break;
            case "createflight":
                if($this->check_session($request->get('dbid'), $request->get('sessionid')) == true) {
                    $ret = SmartCARS::createflight(
                        $request->get('dbid'), $request->get('flightnumber'),$request->get('departureicao'),
                        $request->get('arrivalicao'),$request->get('aircraft'), $request->get('flighttype'),
                        $request->get('departuretime'), $request->get('arrivaltime'), $request->get('flighttime'),
                        $request->input('route'), $request->get('cruisealtitude'), $request->get('distance'));
                    if($ret == true)
                        return response("SUCCESS");
                    else
                        return response("ERROR");
                }
                else
                    return response("AUTH_FAILED");
                break;
            case "positionreport":
                if($this->check_session($request->get('dbid'), $request->get('sessionid')) == true) {
                    $ret = SmartCARS::positionreport(
                        $request->get('dbid'),$request->get('flightnumber'),$request->get('latitude'),
                        $request->get('longitude'),$request->get('magneticheading'), $request->get('trueheading'),
                        $request->get('altitude'), $request->get('groundspeed'), $request->get('departureicao'),
                        $request->get('arrivalicao'), $request->get('phase'), $request->get('arrivaltime'), $request->get('departuretime'),
                        $request->get('distanceremaining'), $request->get('route'), $request->get('timeremaining'),
                        $request->get('aircraft'), $request->get('onlinenetwork'));
                    if($ret == true)
                        return response("SUCCESS");
                    else
                        return response("ERROR");
                }
                else
                    return response("AUTH_FAILED");
                break;
            case "filepirep":
                if($this->check_session($request->get('dbid'), $request->get('sessionid')) == true) {
                    $ret = SmartCARS::filepirep($_GET['dbid'], $_GET['code'], $_GET['flightnumber'], $_GET['routeid'], $_GET['bidid'], $_GET['departureicao'], $_GET['arrivalicao'], $_POST['route'], $_GET['aircraft'], $_GET['load'], $_GET['flighttime'], $_GET['landingrate'], $_POST['comments'], $_GET['fuelused'], $_POST['log']);
                    if($ret == true)
                        echo("SUCCESS");
                    else
                        echo("ERROR");
                }
                else
                    echo("AUTH_FAILED");
                break;
            default:
                return response("Script OK, Frame Version: " . self::VERSION . ", Interface Version: " . self::INTERFACE_VERSION);
                break;

        }
    }
}