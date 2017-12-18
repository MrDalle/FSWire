<?php

/*
* SimBrief APIv1 class
* For use with VA Dispatch systems
* By Derek Mayer - contact@simbrief.com
*
* Any individual wishing to make use of this class must first contact me
* to obtain a unique API key; without which it will be impossible to make
* flight plan requests. The API key must be pasted in the provided area below.
*
* Any attempt to circumvent the API authorization, steal another
* developer's API key, hack, compromise, or gain unauthorized access to
* the SimBrief website or it's web systems, or bypass or allow others to bypass
* the SimBrief.com login screen will result in immediate revocation of the
* associated API key, and in serious situations, legal action at my discretion.
*/





/**********************************************************************/

$simbrief_api_key = 'YUrKcldfm4C8E4EnUqAswEcUJmWDIw2H'; //Paste your API key here

/**********************************************************************/











/*
* URL Checker.
* For use by javascript functions.
*/


if (isset($_GET['js_url_check']))
{
    header('Content-Type: application/javascript');

    $varname = isset($_GET['var']) && isset($_GET['var']) != '' ? trim($_GET['var']) : 'phpvar';

    $url = 'http://www.simbrief.com/ofp/flightplans/xml/'.$_GET['js_url_check'].'.xml';

    $fh = get_headers($url);
    if ($fh[0] !== 'HTTP/1.1 200 OK')
    {
        $resp = false;
    }
    else
    {
        $resp = true;
    }

    print 'var ' . $varname . ' = "' . ($resp ? 'true' : 'false') . '";';

    die();
}


/*
* API Code Generator.
* For use by javascript functions.
*/


if (isset($_GET['api_req']))
{
    header('Content-Type: application/javascript');

    print 'var api_code = "' . md5($simbrief_api_key.$_GET['api_req']) . '";';

    die();
}




/*
* Main Class
*/


class SimBrief
{

    /*
    * Set initial variables
    */

    var $ofp_id = false;

    var $ofp_avail = false;
    var $ofp_obj = false;
    var $ofp_rawxml = false;
    var $ofp_json = false;
    var $ofp_array = false;





    /*
    * Utility functions.
    */

    function file_exists($url)
    {
        $fh = get_headers($url);
        if ($fh[0] !== 'HTTP/1.1 200 OK')
        {
            return false;
        }
        else
        {
            return true;
        }
    }



    /*
    * This returns an object containing the resulting flight plan's information.
    * Once the SimBrief API window finishes generating the flightplan, it will
    * provide your Dispatch System with an OFP identifier. This function uses that
    * identifier to fetch and return the final flight plan data, which you can then
    * process and present to your users in any way you choose.
    */

    function fetchofp()
    {

        /*
        * Check the OFP_ID for the correct formatting. No sense sending a request to the
        * website if we know before hand that it will be invalid.
        *
        * An example of an OFP_ID = "1394916722_c9Vfm2W26V"
        */

        $ofp_id = $this->ofp_id;

        if ($ofp_id === false || $ofp_id == '' || strlen($ofp_id) !== 21 || !preg_match('/[0-9]{10}_[A-Za-z0-9]{10}/',$ofp_id))
        {
            return false;
        }

        /*
        * Try to fetch the XML file from the SimBrief website
        */

        $url = 'http://www.simbrief.com/ofp/flightplans/xml/'.$ofp_id.'.xml';

        if ($this->file_exists($url) === false)
        {
            return false;
        }

        $data = file_get_contents($url); //@

        if ($data === false)
        {
            return false;
        }


        /*
        * Save various formats for later use
        */

        $this->ofp_rawxml = $data;


        $obj = @simplexml_load_string($data);

        if ($obj !== false)
        {
            $this->ofp_obj = $obj;
            $this->ofp_json = json_encode($this->ofp_obj);
            $this->ofp_array = json_decode($this->ofp_json,TRUE);
        }


        /*
        * If all vars were saved properly, update ofp_avail to reflect that data is available
        */

        if ($this->ofp_obj && $this->ofp_json && $this->ofp_array && $this->ofp_rawxml)
        {
            $this->ofp_avail = true;
        }

    }



    /*
    * If OFP identifier is set, try to fetch the data using fetchofp()
    */

    function __construct($ofp_id)
    {
        $this->ofp_id = $ofp_id;

        if ($ofp_id !== false)
        {
            $this->fetchofp();
        }
    }


}





/*
* Determine if an OFP identifier has been returned on this page. If so, save it to a
* variable for later use.
*/

$ofp_id = isset($_GET['ofp_id']) && $_GET['ofp_id'] != '' ? $_GET['ofp_id'] : false;



/*
* Create $simbrief
*/

$simbrief = new SimBrief($ofp_id);




?>