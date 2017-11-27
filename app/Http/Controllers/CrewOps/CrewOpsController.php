<?php

namespace App\Http\Controllers\CrewOps;

use App\AircraftGroup;
use App\Airline;
use App\Bid;
use App\Models\Aircraft;
use App\Models\Airport;
use App\PIREP;
use App\ScheduleTemplate;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $rank = $this->getRankByUserID(Auth::user()->id);
        $newpirep = PIREP::where('user_id', Auth::user()->id)->with('depapt')->with('arrapt')->latest('created_at')->first();
        $flighttime = PIREP::where('user_id', Auth::user()->id)->sum('flighttime');
        if (Auth::user()->totalhours != null) {
            $totalflightime = Auth::user()->totalhours + $this->convertTime($flighttime);
        }else{
            $totalflightime = $this->convertTime($flighttime);
        }

        return view('crewops.dashboard', ['bids' => $totalbids, 'logs' => $totalLogs, 'newpirep' => $newpirep, 'totalflightime' => $totalflightime]);
        return view('crewops.dashboard', ['bids' => $totalbids, 'logs' => $totalLogs, 'newpirep' => $newpirep, 'totalflightime' => $totalflightime, 'rank' => $rank]);
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

        $flighttime = PIREP::where('user_id', $id)->sum('flighttime');
        if ($user->totalhours != null) {
            $totalflightime = $user->totalhours + $this->convertTime($flighttime);
        }else{
            $totalflightime = $this->convertTime($flighttime);
        }

        return view('crewops.profile.view', ['user' => $user, 'pireps' => $pireps, 'totalflightime' => $totalflightime]);
    }
    public function profileEdit()
    {
        // Check if the user is the right user. We don't want someone modifying other people's profile.
        $user = User::find(Auth::user()->id);

                $pireps = PIREP::where('user_id', $user->id)
                    ->orderBy('id', 'desc')
                    ->limit(10)
                    ->get();

                $flighttime = PIREP::where('user_id', $user->id)->sum('flighttime');
                if ($user->totalhours != null) {
                    $totalflightime = $user->totalhours + $this->convertTime($flighttime);
                }else{
                    $totalflightime = $this->convertTime($flighttime);
                }

        return view('crewops.profile.edit', ['user' => $user, 'pireps' => $pireps, 'totalflightime' => $totalflightime]);
    }
    public function getSchedule(Request $request)
    {

        $query = array();

        // Check the request for specific info??
        if ($request->has('airline'))
            $query['airline_id'] = Airline::where('icao', $request->query('airline'))->first()->id;

        if ($request->has('depapt'))
            $query['depapt_id'] = Airport::where('icao', $request->query('depapt'))->first()->id;

        if ($request->has('arrapt'))
            $query['arrapt_id'] = Airport::where('icao', $request->query('arrapt'))->first()->id;

        if ($request->has('aircraft'))
            $query['aircraft_group_id'] = AircraftGroup::where('icao', $request->query('aircraft'))->first()->id;

        //dd($query);
        // Load all the schedules within the database
        if (empty($query)) {
            $schedules = ScheduleTemplate::with('depapt')->with('arrapt')->with('airline')->with('aircraft_group')->orderBy('created_at', 'desc')->paginate(8);
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
        $pireps = PIREP::where('user_id', Auth::user()->id)->with('airline')->with('depapt')->with('arrapt')->with('aircraft')->get();
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
        $users = User::all();

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
       return view('crewops.logbook.show', ['p' => $pirep]);
    }

    public function getRankByUserID($id)
    {
        $user = User::findOrFail($id);
        $flighttime = PIREP::where('user_id', $user->id)->sum('flighttime');

        if ($user->totalhours != null) {
            $time = $user->totalhours  + $this->convertTime($flighttime);
        }else{
            $time = $this->convertTime($flighttime);
        }
        $hours = $time;
        $rank = DB::select('SELECT tr.rank_name 
FROM vaos_ranks as tr 
LEFT JOIN (SELECT * FROM vaos_ranks LIMIT 1,69596585953484) as l 
ON l.needed_points = (SELECT MIN(needed_points) FROM vaos_ranks WHERE needed_points > tr.needed_points limit 1) 
LEFT OUTER JOIN vaos_users AS tu ON ? >= tr.needed_points AND ? < l.needed_points WHERE tu.id IS NOT NULL group by tr.rank_name', [$hours, $hours]);
        $output = array_map(function ($object) { return $object->rank_name; }, $rank);
        $rank = implode(', ', $output);
        return $rank;
    }

    function convertTime($dec)
    {
        // start by converting to seconds
        $seconds = ($dec * 3600);
        // we're given hours, so let's get those the easy way
        $hours = floor($dec);
        // since we've "calculated" hours, let's remove them from the seconds variable
        $seconds -= $hours * 3600;
        // calculate minutes left
        $minutes = floor($seconds / 60);
        // remove those from seconds as well
        $seconds -= $minutes * 60;
        // return the time formatted HH:MM:SS
        //return lz($hours).":".lz($minutes).":".lz($seconds);
        return $hours;

    }

// lz = leading zero
    function lz($num)
    {
        return (strlen($num) < 2) ? "0{$num}" : $num;
    }
}
