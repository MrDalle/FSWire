<?php


namespace App\Http\ViewComposers;


use App\PIREP;
use App\Rank;
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
            $flighttime = PIREP::where('user_id', $this->user->id)->sum('flighttime');
            $totalMiles = PIREP::where('user_id', $this->user->id)->sum('distance');
            if ($this->user->totalhours != null) {
                $totalflightime = $this->user->totalhours + $this->convertTime($flighttime);
            }else{
                $totalflightime = $this->convertTime($flighttime);
            }
            $rank = $this->getRankVariables($totalflightime);

            $view
                ->with('rank', $rank['name'])
                ->with('hoursLeft', $rank['hoursLeft'])
                ->with('percentageDone', $rank['percentageProgressToNextRank'])
                ->with('totalMiles', $totalMiles);
        }

    }

    private function getRankVariables($flighttime)
    {
        $rank = Rank::where('needed_points','<=',$flighttime)->orderBy('needed_points', 'desc')->first();
        $nextRank = Rank::where('needed_points','>',$flighttime)->orderBy('needed_points', 'asc')->first();
        return [
            'hoursLeft' => round($nextRank->needed_points - $flighttime),
            'percentageProgressToNextRank' => round(($flighttime - $rank->needed_points)/($nextRank->needed_points - $rank->needed_points)*100),
            'name' => $rank->rank_name
        ];
    }

    private function convertTime($flighttime)
    {
        // start by converting to seconds
        $seconds = ($flighttime * 3600);
        // we're given hours, so let's get those the easy way
        $hours = floor($flighttime);
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

}