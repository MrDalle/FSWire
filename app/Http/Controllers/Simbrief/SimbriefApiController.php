<?php


namespace App\Http\Controllers\Simbrief;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimBriefApiController extends Controller
{
    protected $simbrief_api_key = env('SIMBRIEF_KEY');

    public function getApiCode(Request $request)
    {
        return response(md5($this->simbrief_api_key.$request->get('api_req')),200);
    }

    public function checkPageExist(Request $request)
    {
        $url = 'http://www.simbrief.com/ofp/flightplans/xml/'.request('js_url_check').'.xml';

        $fh = get_headers($url);
        if ($fh[0] !== 'HTTP/1.1 200 OK')
        {
            return 'false';
        }
        else
        {
            return 'true';
        }

    }

}
