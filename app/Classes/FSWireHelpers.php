<?php

namespace App\Classes;


use App\PIREP;
use App\Rank;
use App\User;

class FSWireHelpers
{
    static function getTotalMilesFlown($user_id)
    {
        return PIREP::where('user_id', $user_id)->sum('distance');
    }

    static function getTotalFlightsFlown($user_id)
    {
        return PIREP::where('user_id', $user_id)->count();
    }

    static function getAvgLandingRate($user_id)
    {
        return PIREP::where('user_id', $user_id)->avg('landingrate');
    }

    static function convertTime($flighttime)
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

    static function getTotalFlightTime($id)
    {
        $flighttime = PIREP::where('user_id', $id)->sum('flighttime');
        $user = User::find($id);
        if ($user->totalhours != null) {
            $totalflightime = $user->totalhours + self::convertTime($flighttime);
        }else{
            $totalflightime = self::convertTime($flighttime);
        }

        return $totalflightime;
    }

    static function getRankVariables($user_id)
    {
        $totalflightime = self::getTotalFlightTime($user_id);

        $rank = Rank::where('needed_points','<=',$totalflightime)->orderBy('needed_points', 'desc')->first();
        $nextRank = Rank::where('needed_points','>',$totalflightime)->orderBy('needed_points', 'asc')->first();
        return [
            'hoursLeft' => round($nextRank->needed_points - $totalflightime),
            'percentageProgressToNextRank' => round(($totalflightime - $rank->needed_points)/($nextRank->needed_points - $rank->needed_points)*100),
            'name' => $rank->rank_name,
            'rank_level' => $rank->id
        ];
    }
}