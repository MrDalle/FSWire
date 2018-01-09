<?php

namespace App\Http\Controllers\Maps;


use App\ACARSData;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use GuzzleHttp\Client;

class AcarsMapController extends Controller
{
    public function renderMaps()
    {
        //Get all ACARS flight
        $flights = ACARSData::with('user', 'bid','bid.aircraft.image')->get();
        //$flights = ACARSData::where('updated_at', '>=', Carbon::now()->subHour(1))->with('user', 'bid','bid.aircraft.image')->get();
        return view('maps.acars_map',[
            'flights' => $flights->toJson()
        ]);
    }

    public function getAcars($id)
    {
        $flight = ACARSData::where('id', $id)->with('user', 'bid','bid.arrapt','bid.airline','bid.depapt','bid.aircraft.image')->first();

        $img_url = '/img/aircrafts/thumbs/notavailable.jpg';

        $client = new Client();
        $res = $client->request('GET', 'http://www.airport-data.com/api/ac_thumb.json?n=1&r=' . $flight->bid->aircraft->registration);
        $body = json_decode($res->getBody());

        if (property_exists($body, 'count')) {
            $img_url = $body->data[0]->image;
        }


        $flight['img_url'] = $img_url;
        return response(json_encode($flight));

    }
}