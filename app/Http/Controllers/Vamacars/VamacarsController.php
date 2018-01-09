<?php


namespace App\Http\Controllers\Vamacars;


use App\ACARSData;
use App\Bid;
use App\Events\PirepSave;
use App\Events\PosReportSave;
use App\Http\Controllers\Controller;
use App\Models\Aircraft;
use App\PIREP;
use App\PIREPComment;
use App\VamEvent;
use App\VamTrack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VamacarsController extends Controller
{
    public function removeBookAircraft(Request $request)
    {
        /*var_dump( file_get_contents('php://input')))
        json_decode(file_get_contents('php://input'), true)
        ve vam se overi jmeno a heslo uzivatele zaslaneho ve forme JSON:
        pilot => "ESV100" (6) password => "neconeco"
        pote se provede tento sql dotaz:
        update fleets set booked=0 ,gvauser_id=NULL , booked_at=NULL
        where booked=1 and hangar=0 and fleet_id not in
            (select fleet_id from reserves) and (UNIX_TIMESTAMP(now()) - UNIX_TIMESTAMP(booked_at)) >86400
        nothing is return
        */
        $data = json_decode($request->getContent());
        //Debugger::log($data);

        return response('',200);
    }

    public function getAircraft(Request $request)
    {
        /*
        Return list aircraft which is user may use
        Format:
        $json[$i]= array(
			'location_icao' => $location_icao,
			'fleet_id' => $fleet_id,
			'name' => $name,
			'plane_icao' => $plane_icao ,
			'registry' => $registry
			)	;

          */

        $data = $request->getContent();
        //Debugger::log($data);
        $aircrafts = [];

        $allFleets = Aircraft::all();
        //Debugger::log($allFleets);

        foreach ($allFleets as $fleet) {
            //$location = PIREP::where('aircraft_id', $fleet->id)->with('arrapt')->orderBy('created_at','desc')->first();
            $aircrafts[] = array(
                'location_icao' => 'LKPR',//($location) ? 'LKPR' : $location->arrapt->icao,
                'fleet_id' => $fleet['id'],
                'name' => $fleet['name'],
                'plane_icao' => $fleet['icao'] ,
                'registry' => $fleet['registration']
            )	;
        }
        return response(json_encode($aircrafts),200);

    }

    public function pilotConnection(Request $request)
    {
        /*
         Vraci zabookovany let pokud ho uzivatel ma
        pokud uzivatel neexistuje vraci
        FAIL
        pokud ano vraci let v tomto formatu
        $json[]= array(
		'id' => $id,
		'departure' => $departure,
		'arrival' => $arrival,
		'alternative' => $alternative ,
		'route' => $route,
		'callsign' => $flight,
		'etd' => $etd,
		'plane_icao' => $plane_icao,
		'duration' => $duration,
		'registry' => $registry,
		'pax' => $pax,
		'cargo' => $cargo
	);
         */
        $data = json_decode($request->getContent());
        //Debugger::log($data);
        $pilotid = (int)$data->pilot;
        $reservation = Bid::where('user_id', $pilotid)->with('user')->with('airline')->with('depapt')->with('arrapt')->with('aircraft')->first();

        if ($reservation) {
            $json[]= array(
                'id' => $pilotid,
                'departure' => $reservation->depapt->icao,
                'arrival' => $reservation->arrapt->icao,
                'alternative' => '' ,
                'route' => $reservation->route,
                'callsign' => $reservation->airline->icao . $reservation->flightnum,
                'etd' => $reservation->deptime,
                'plane_icao' => $reservation->aircraft->icao,
                'duration' => 0,
                'registry' => $reservation->aircraft->registration,
                'pax' => $reservation->load,
                'cargo' => 0
            );
        } else
        {
            $json[]= array(
                'id' => $pilotid,
                'departure' => '',
                'arrival' => '',
                'alternative' => '' ,
                'route' => '',
                'callsign' => '',
                'etd' => '',
                'plane_icao' => '',
                'duration' => '',
                'registry' => '',
                'pax' => '',
                'cargo' => ''
            );
        }

        return response((json_encode($json)));

    }

    public function liveAcars(Request $request)
    {
        /*
         * Prijima JSON ve formatu:
         * pilotId => "22" (2) |
         * flightId => "2017829646164ESV0001" (20) |
         * departure => "LKPR" (4) |
         * arrival => "LKMT" (4) |
         * ias => "10" (2) |
         * heading => "244" (3) |
         * gs => "0" |
         * altitude => "1175" (4) |
         * fuel => "627" (3) |
         * fuel_used => "1" |
         * latitude => "50.1104754073019" (16) |
         * longitude => "14.2695620333723" (16) |
         * time_passed => "60" (2) |
         * perc_completed => "0" |
         * oat => "20" (2) |
         * wind_deg => "214" (3) |
         * wind_knots => "11" (2) |
         * flight_status => "BOARDING" (8) |
         * plane_type => "EA50" (4) |
         * pending_nm => "151" (3)

         */
        $temp = json_decode($request->getContent());
        $data = $temp[0];

        $pilotid = $data->pilotId;

        $reservation = Bid::where('user_id', $pilotid)->with('user')->with('airline')->with('depapt')->with('arrapt')->with('aircraft')->first();
        $phase = $data->flight_status;

        # Estimate the time remaining
        if($data->gs > 0)
        {
            $time_remain = $data->pending_nm / $data->gs * 60 * 60;
            if((($data->pending_nm<25) && ($time_remain<600)) && (($data->flight_status == 'DESCENT') || ($data->flight_status == 'CRUISE')))
            {
                $phase = 'ON APROACH';
            }
            $time_remain = gmdate("H:i", $time_remain);
        }
        else
        {
            $time_remain = '00:00';
        }

        // find if the row exists
        $rpt = ACARSData::firstOrNew(['bid_id' => $reservation->id, 'user_id' => $pilotid]);
        $rpt->user()->associate($pilotid);
        $rpt->bid()->associate($reservation->id);
        $rpt->lat = $data->latitude;
        $rpt->lon = $data->longitude;
        $rpt->heading = $data->heading;
        $rpt->altitude = $data->altitude;
        $rpt->groundspeed = $data->gs;
        $rpt->phase = $phase;
        $rpt->client = 'SimAcars';
        $rpt->distremain =  $data->pending_nm;
        $rpt->timeremaining = $time_remain;
        $rpt->online =  'NA';
        $rpt->save();

        //firing an event
        event(new PosReportSave($rpt));

        return response('ACARS saved in the system', 200);

    }

    public function receiveVamPirep(Request $request)
    {
        $temp = json_decode($request->getContent());
        $data = $temp[0];
        //Log::info('Showing user profile for user: '.(get_object_vars($data)));
        $dep = $data->departure;
        $arr = $data->arrival;
        $pilotID = $data->gvauserId;
        $bid = Bid::where('user_id', $pilotID)
            ->with([
                'airline',
                'depapt' => function ($query) use ($dep)
                                { $query->where('icao', $dep); },
                'arrapt' => function ($query) use ($arr)
                                { $query->where('icao', $arr); },

                'aircraft'])->first();

        $log = '';
        $flightId = $data->flightId;
        //FIND DUPLICATES Return "DUPLICATED" pokud let jiz v systemu je
        $pirepExist = PIREP::where('schedule_data', $flightId)->first();
        if($pirepExist) {
            return response('DUPLICATED', 200);
        }


        $pirep = new PIREP();

        // first let's retrieve the original bid from the database and enter in all the values\

        $pirep->user()->associate($data->gvauserId);
        // This is a legacy ACARS client. Treat it with respect, they won't be around
        // for too much longer. All we need is the user data, flight info and we are all set
        $pirep->airline()->associate($bid->airline_id);
        $pirep->aircraft()->associate($bid->aircraft_id);
        $pirep->depapt()->associate($bid->depapt_id);
        $pirep->arrapt()->associate($bid->arrapt_id);
        $pirep->flightnum = $bid->flightnum;
        if (is_null($data->route)) {
            $pirep->route = 'NOT FILLED';
        } else {
            $pirep->route = $data->route;
        };
        $pirep->status = 0;
        $pirep->distance = $data->distance;
        $pirep->landingrate = round($data->landing_vs);
        $pirep->flighttime = $data->flight_duration;
        $pirep->acars_client = 'SimAcars';
        $pirep->fuel_used = $data->flight_fuel;
        $pirep->flight_data = json_encode($data);
        $pirep->schedule_data = $data->flightId;
        // Auto Accept System
        if (env('VAOS_AA_ENABLED')) {
            if ($data->landing_vs >= env('VAOS_AA_LR'))
                $pirep->status = 1;
        }
        if (env('VAOS_AA_ALL'))
            $pirep->status = 1;


        $pirep->save();
        // now let's take care of comments.
        $comment = new PIREPComment();

        $comment->user()->associate($pilotID);
        $comment->pirep()->associate($pirep);
        $comment->comment = $data->comments;
        $comment->save();

        //firing an event
        event(new PirepSave($pirep));

        // Time to delete the bid from the table.

        $bid->delete();

        return response('OK', 200);
    }

    public function receiveVamEvents(Request $request)
    {
        $data = json_decode($request->getContent(),true);
        $numEvents = 0;
        foreach ($data as $row)
        {
            $row['landing_vs'] = round(str_replace(',','.',$row['landing_vs']));
            VamEvent::create($row);
            $numEvents++;
        }

        return response($numEvents, 200); //return pocet vlozenych udalosti
    }

    public function receiveVamTracks(Request $request)
    {
        $data = json_decode($request->getContent(),true);
        $numTrack = 0;
        foreach ($data as $row)
        {
            VamTrack::create($row);
            $numTrack++;
        }
        return response($numTrack, 200); //return pocet vlozenych trackbodu
    }

    public function checkData(Request $request)
    {
        $data = json_decode($request->getContent());
        $flightID = $data[0]->flightId;

        $resp[] = array(
            'numeventsinsertedcheck' => VamEvent::where('flight_id',$flightID)->count(),
            'numtracksinsertedcheck' => VamTrack::where('flight_id',$flightID)->count()
        );

        return response((json_encode($resp)));
    }

    public function deleteData(Request $request)
    {
        $data = json_decode($request->getContent());
        $flightID = $data[0]->flightId;
        VamEvent::where('flight_id',$flightID)->delete();
        VamTrack::where('flight_id',$flightID)->delete();
        $pirep = PIREP::where('schedule_data',$flightID)->first();
        if ($pirep) {
            $pirepId = $pirep->id;
            PIREPComment::where('pirep_id', $pirepId)->delete();
            $pirep->delete();
        }

        return response('OK', 200);
    }

}