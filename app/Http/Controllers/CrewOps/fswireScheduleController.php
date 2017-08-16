<?php

namespace App\Http\Controllers\crewops;

use App\AircraftGroup;
use App\Airline;
use App\Classes\VAOS_Schedule;
use App\ScheduleTemplate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class fswireScheduleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airlines = Airline::all();
        $acfgroups = AircraftGroup::all();
        return view('crewops.schedule.create', ['airlines' => $airlines, 'acfgroups' => $acfgroups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // For now, just send the input to the controller.
        // dd($request);
        // Convert Request into Array

        $this->validate($request, [
            'flightnum' => 'required|numeric|digits:4',
        ]);

        $data = $request->all();
        VAOS_Schedule::newRoute($data);

        $request->session()->flash('schedule_created', true);
        return redirect('flightops/schedule');
    }
}
