<?php
/**
 * Created by PhpStorm.
 * User: Evzen
 * Date: 13.12.2017
 * Time: 14:15
 */

namespace App\Http\Controllers\Simbrief;


use App\Bid;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;


class SimBriefController extends Controller
{
    public function output($bidId, Request $request)
    {
        $ofp_id = $request->get('ofp_id');

        $url = 'http://www.simbrief.com/ofp/flightplans/xml/'.$ofp_id.'.xml';
        //$url = 'http://dev.fswire/1513275058_4AA1B1BF75.xml';
        $data = file_get_contents($url);

        $obj = @simplexml_load_string($data);

        if ($obj !== false)
        {
            $ofp_obj = $obj;
            $ofp_json = json_encode($ofp_obj);
            $ofp_array = json_decode($ofp_json,TRUE);
        }
        $route_data = json_encode([
           'simbrief_id' => $ofp_id,
            'duration' => Carbon::createFromTimestamp($ofp_array['times']['sched_time_enroute'])->format('h:i')
        ]);

        //Update bids table with generated values
        $updatedBid = Bid::where('id', $bidId)->update([
            'route_data' => $route_data,
            'route' => $ofp_array['api_params']['route'],
            'cruise' => $ofp_array['atc']['initial_alt']*100,
            'load' => $ofp_array['weights']['pax_count'],
            'deptime' => Carbon::createFromTimestamp($ofp_array['times']['sched_out']),
            'arrtime' => Carbon::createFromTimestamp($ofp_array['times']['sched_in'])
        ]);

        if ($request->secure())
        {
            $url = preg_replace("/^http:/i", "https:", $ofp_obj->links->skyvector);
            $ofp_obj->links->skyvector = $url;
            $ofp_array['links']['skyvector'] = $url;
        }


        return view('simbrief.output',[
            'ofp_obj' => $ofp_obj,
            'ofp_array' => $ofp_array
        ]);
    }

}