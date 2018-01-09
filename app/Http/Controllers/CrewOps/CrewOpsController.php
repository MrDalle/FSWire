<?php

namespace App\Http\Controllers\CrewOps;

use App\AircraftGroup;
use App\Airline;
use App\Bid;
use App\Classes\FSWireHelpers;
use App\Models\Aircraft;
use App\Models\Airport;
use App\PIREP;
use App\ScheduleTemplate;
use App\User;
use App\VamEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class CrewOpsController extends Controller
{
    public function index()
    {
        // Get the total number of bids for the user
        $totalbids = Bid::where('user_id', Auth::user()->id)->get();
        $totalLogs = PIREP::where('user_id', Auth::user()->id)->get();
        //$rank = $this->getRankByUserID(Auth::user()->id);
        $newpirep = PIREP::where('user_id', Auth::user()->id)->with('depapt')->with('arrapt')->latest('created_at')->first();

        return view('crewops.dashboard', [
            'bids' => $totalbids,
            'logs' => $totalLogs,
            'newpirep' => $newpirep,
            'totalflightime' => FSWireHelpers::getTotalFlightTime(Auth::user()->id)
            ]);
    }
    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(Auth::id()),
            ],
                'username' => [
                    'required',
                    'string',
                    Rule::unique('users')->ignore(Auth::id()),
                ],

            'vatsim' => 'integer',
            'ivao' => 'integer',
            'password' => 'same:password2',
            'password2' => 'same:password',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'cover_url' => 'url',
            'avatar_url' => 'url',
        ]);

        $user = User::find(Auth::id());
        $user->username = $request->username;
        $user->email = $request->email;
        $user->vatsim = $request->vatsim;
        $user->ivao = $request->ivao;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->cover_url =$request->cover_url;
        $user->avatar_url =$request->avatar_url;

        if(!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect('flightops/profile/' . Auth::id());
    }
    public function profileShow($id)
    {
        $user = User::findOrFail($id);

        $pireps = PIREP::where('user_id', $id)
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get();

        $rankUser = FSWireHelpers::getRankVariables($id);

        return view('crewops.profile.view', [
            'user' => $user,
            'pireps' => $pireps,
            'totalflightime' => FSWireHelpers::getTotalFlightTime($id),
            'userTotalMiles' => FSWireHelpers::getTotalMilesFlown($id),
            'userRankName' => $rankUser['name'],
            'userRankHoursLeft' => $rankUser['hoursLeft'],
            'userRankProgressToNextRank' => $rankUser['percentageProgressToNextRank']
        ]);
    }
    public function profileEdit()
    {
        // Check if the user is the right user. We don't want someone modifying other people's profile.
        $user = User::find(Auth::user()->id);

                $pireps = PIREP::where('user_id', $user->id)
                    ->orderBy('id', 'desc')
                    ->limit(10)
                    ->get();

        return view('crewops.profile.edit', [
            'user' => $user,
            'pireps' => $pireps,
            'totalflightime' => FSWireHelpers::getTotalFlightTime($user->id)]);
    }
    public function getSchedule(Request $request)
    {

        $query = array();

        // Check the request for specific info??
        if ($request->has('airline'))
        {
            $id=Airline::where('icao', $request->query('airline'));
            if ($id->count()) {$query['airline_id'] = $id->first()->id;} else {$query['airline_id'] = -1;};

        }

        if ($request->has('depapt'))
        {
            $id = Airport::where('icao', $request->query('depapt'));
            if ($id->count()) {$query['depapt_id'] = $id->first()->id;} else {$query['depapt_id'] = -1;};

        }

        if ($request->has('arrapt'))
        {
            $id = Airport::where('icao', $request->query('arrapt'));
            if($id->count()) {$query['arrapt_id'] = $id->first()->id;} else {$query['arrapt_id'] = -1;}

        }

        if ($request->has('aircraft_group'))
        {
            $id = AircraftGroup::where('icao', $request->query('aircraft_group'));
            if($id->count()) {$query['aircraft_group_id'] = $id->first()->id;} else {$query['aircraft_group_id'] = -1;}
        }


        //dd($query);
        // Load all the schedules within the database
        if (empty($query)) {
            //$schedules = ScheduleTemplate::with('depapt')->with('arrapt')->with('airline')->with('aircraft_group')->orderBy('created_at', 'desc')->limit(8);
            $schedules = ScheduleTemplate::where('id', -1)->paginate(8);
            //dd($schedules);
        }
        else
            $schedules = ScheduleTemplate::where($query)->with('depapt')->with('arrapt')->with('airline')->with('aircraft_group')->orderBy('created_at', 'desc')->paginate(8);
        $aircraft = Aircraft::all();
        //$schedules = ScheduleTemplate::all();
        //dd($schedules);
        // Return the view
        //return $schedules;
        return view('crewops.schedule.view', ['schedules' => $schedules, 'aircraft' => $aircraft]);
    }
    public function getScheduleAJAX(Request $request)
    {
        // Find out what we are searching for.
        $schedules = new ScheduleTemplate;
    }
    public function getLogbook()
    {
        $pireps = PIREP::where('user_id', Auth::user()->id)->with('airline')->with('depapt')->with('arrapt')->with('aircraft')->orderBy('created_at', 'desc')->paginate(8);
        return view('crewops.logbook.view', ['pireps' => $pireps]);
    }
    public function getScheduleSearch()
    {
        $airports = Airport::all();
        $airlines = Airline::all();
        $aircraft = AircraftGroup::all();
        return view('crewops.schedule.search', ['airports' => $airports, 'airlines' => $airlines, 'aircraft' => $aircraft]);
    }
    public function getRoster()
    {
        $users = User::paginate(12);

        return view('crewops.roster.view', ['users' => $users]);
    }
    public function postManualPirep(Request $request)
    {

        $flightinfo = Bid::find($request->bid);
        $pirep = new PIREP();
        $pirep->user()->associate(Auth::user()->id);
        $pirep->airline()->associate($flightinfo->airline_id);
        $pirep->aircraft()->associate($flightinfo->aircraft_id);
        $pirep->depapt()->associate($flightinfo->depapt_id);
        $pirep->arrapt()->associate($flightinfo->arrapt_id);
        $pirep->flightnum = $flightinfo->flightnum;
        $pirep->route = "Manually Filed";
        $pirep->status = 0;
        $pirep->landingrate = $request->input('landingrate');

        $pirep->save();
        $flightinfo->delete();

        $request->session()->flash('success', 'Manual PIREP submitted for manual approval.');
        return redirect('/flightops');
    }

    public function getLogbookDetailed($id)
    {
        $pirep = PIREP::where('id', $id)->with('airline')->with('depapt')->with('arrapt')->with('aircraft')->with('user')->first();
        $log = [];
        $log['type'] = "UNKNOWN";
        $log['logs'] = [];
        switch ($pirep->acars_client) {
            case 'SimAcars':
                $log['type'] = "SIMACARS";
                $flight_data = json_decode($pirep->flight_data);
                foreach ($flight_data as $key => $value) {
                    if ($value != '') {
                        $log['events'][] = strtoupper($key) . ' : ' . $value;
                    }
                }
                $events = VamEvent::where('flight_id', $pirep->schedule_data)->get();
                foreach ($events as $item) {
                    $log['logs'][] = $item->event_timestamp . " : " . $item->event_description;
                };

                break;
            case 'smartCARS':
                $log['type'] = "SMARTACARS";
                $log['logs'] = explode("*", $pirep->flight_data);
                break;

        }

        return view('crewops.logbook.show', [
            'p' => $pirep,
            'log' => $log
        ]);
    }


}
