<?php


namespace App\Http\ViewComposers;


use App\Classes\FSWireHelpers;
use App\PIREP;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class RankComposer
{
   protected $user;


    public function __construct()
    {
        if (Auth::check()) {
            $this->user = Auth::user();
        } else {
            $this->user = null;
        }


    }


    public function compose(View $view)
    {
        if (!is_null($this->user)) {

            $rank = FSWireHelpers::getRankVariables($this->user->id);

            $view
                ->with('rank', $rank['name'])
                ->with('hoursLeft', $rank['hoursLeft'])
                ->with('percentageDone', $rank['percentageProgressToNextRank'])
                ->with('totalMiles', FSWireHelpers::getTotalMilesFlown($this->user->id));
        }

    }





}