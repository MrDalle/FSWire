<?php

namespace App\Http\Controllers\CrewOps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SimbriefController extends Controller
{
    public function output(Request $request)
    {
        return view('crewops.briefing.simbrief', [
            'request' => $request->get('ofp_id')
        ]);
    }
}
