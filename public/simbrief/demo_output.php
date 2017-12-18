<?php

/***********************************************************************************************
 * SimBrief API Demonstration                                                                   *
 * Use this file to learn how to implement the SimBrief API into your Dispatch System!          *
 * By Derek Mayer ( contact@simbrief.com )                                                      *
 * Updated: 03/16/2014                                                                          *
 *                                                                                              *
 * This page does not include any styling in an effort to keep the code clean and easy to read. *
 ************************************************************************************************/


/*
* This page simulates the "view flightplan" area of your dispatch system. This should be where
* you have the API redirect your pilots when the flight plan has been generated.
*
* To be able to receive the OFP data sent back from the SimBrief system, we must first include
* the SimBrief API class.
*/

include 'simbrief.apiv1.php';



/*
* And that's it! If the API redirected you to this page, it should have appended a
* "?ofp_id=" parameter to the end of the page url. The SimBrief API will look for this parameter,
* and if it's present, will load the flightplan data into the $simbrief object. You can then
* load this data into your Dispatch System in any way you wish. The sky's the limit!
*
* It should be noted that the data files associated with generated flight plans only remain on
* the SimBrief server for a short time (less than a day), so if you would like the flight plan
* to remain available to your users for longer than that, I recommend programming your system to
* save the data locally on your own server for future use.
*
* Below I will simply var_dump the $simbrief variable to display the returned data. The variable
* contains the following data:
*
* $simbrief->ofp_id returns the OFP datafile to be fetched, as specified in the page URL
* $simbrief->ofp_avail returns whether flightplan data was loaded successfully (true/false)
* $simbrief->ofp_obj returns the data as a PHP SimpleXML Object
* $simbrief->ofp_rawxml returns the raw XML string of the data
* $simbrief->ofp_json returns the data as a JSON Object
* $simbrief->ofp_array returns the data as a standard PHP Array
*/


$xmllink = $_GET['ofp_id'];

print <<<END
<!DOCTYPE html>
<html lang="en">

<head>
<title>SimBrief.com - API Demo</title>
<meta name="author" content="Derek Mayer">
<meta charset="UTF-8">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"> 

<!--THE FOLLOWING LINE MUST BE INCLUDED FOR THE API TO FUNCTION-->
<script type="text/javascript" src="simbrief.apiv1.js"></script>

</head>

<body>



<h3>The following is a var_dump() of the returned data.</h3>
<br>
<h3>It is pulled from <a href="http://www.simbrief.com/ofp/flightplans/xml/$xmllink.xml">this xml file</a></h3>

<br>
END;

var_dump($simbrief);


print <<<END
<br><br><br>

</body>
</html>
END;


?>