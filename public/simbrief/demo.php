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
* Using the SimBrief API should be fairly straight forward; Every effort was made to automate 
* the procedure as much as possible.
*
* The API demo comes in 2 parts. This first part is meant to illustrate how to construct your 
* dispatch options page so that it works with the API.
*
* The only requirements to keep in mind for this page are:
*
* 1) The <input> names must match the input names listed in the VA Integration documentation. 
*    For example, the aircraft type would be specified using <input name="type">, the
*    departure date would be <input name="date">, and so on. Fields not named properly will
*    be ignored when generating the flightplan. The SimBrief API documentation can be found
*    at this link: http://www.simbrief.com/forum/viewtopic.php?f=6&t=6 .
*
*    At the very least, you must include the following inputs: 'orig', 'dest', and 'type'. Any
*    other omitted inputs will be replaced with default values. If the 'route' input is omitted,
*    it will be replaced with the last route used by SimBrief users for this city pair. If this
*    city pair has never been selected before, the route will revert to 'Direct', causing the 
*    Navlog option to be disabled.
*
* 2) You must load the "simbrief.apiv1.js" file in your html <head>, as it contains the
*    necessary functions for the API to operate.
*
* 3) The <form> containing your Dispatch Options must have at least the following property:
*    <form id="sbapiform">.
*
* 4) Your form's submit button must have at least the following property:
*    onclick="simbriefsubmit('referral_page');" , where "referral_page" is the link to the page
*    you want the API to redirect to when the flight plan is ready.
*
* 5) The "simbrief.apiv1.php" file should reside in the same directory as your dispatch page.
*    If you absolutely need to have it in a different directory, you will need to modify the
*    "var api_dir =" line in the "simbrief.apiv1.js" file to point to the proper location.
*
* 6) Prior to using the API, you must obtain an API key and PASTE IT into the applicable
*    variable at the very top of your "simbrief.apiv1.php" file. Failure to do this will
*    result in your flightplan requests being denied.
*/



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



<h3>First and foremost, you must include the following line in your page header: <i>&lt;script type="text/javascript" src="simbrief.apiv1.js"&gt;&lt;/script&gt;</i></h3>

<form id="sbapiform">



<h3>Next, define your options &lt;form&gt; and give it the following property: <i>id="sbapiform"</i>. In your form, you can have user selectable options:</h3>
<br>

<table>
	<tr>
		<td>Aircraft:</td>
		<td><select name="type"><option value="a320">A320</option><option value="b738">B738</option></select></td>
	<tr>
	<tr>
		<td>Origin:</td>
		<td><input name="orig" size="5" type="text" placeholder="ZZZZ" maxlength="4" value="KJFK"></td>
	<tr>
	<tr>
		<td>Destination:</td>
		<td><input name="dest" size="5" type="text" placeholder="ZZZZ" maxlength="4" value="KBOS"></td>
	<tr>
	<tr>
		<td>Route:</td>
		<td><textarea name="route" placeholder="Enter your route here"></textarea></td>
	</tr>
	<tr>
		<td colspan=2>---------------</td>
	</tr>
	<tr>
		<td>Units:</td>
		<td><select name="units"><option value="KGS">KGS</option><option value="LBS" selected>LBS</option></select></td>
	</tr>
	<tr>
		<td>Cont Fuel: </td>
		<td><select name="contpct"><option value="auto" selected>AUTO</option><option value="0">0 PCT</option><option value="0.02">2 PCT</option><option value="0.03">3 PCT</option><option value="0.05">5 PCT</option><option value="0.1">10 PCT</option><option value="0.15">15 PCT</option><option value="0.2">20 PCT</option></select></td>
	</tr>
	<tr>
		<td>Reserve Fuel: </td>
		<td><select name="resvrule"><option value="auto">AUTO</option><option value="0">0 MIN</option><option value="15">15 MIN</option><option value="30">30 MIN</option><option value="45" selected>45 MIN</option><option value="60">60 MIN</option><option value="75">75 MIN</option><option value="90">90 MIN</option></select></td>
	</tr>	
	<tr>
		<td>Detailed Navlog: </td>
		<td><input type="hidden" name="navlog" value="0"><input type="checkbox" name="navlog" value="1" checked></td>
	</tr>
	<tr>
		<td>ETOPS Planning: </td>
		<td><input type="hidden" name="etops" value="0"><input type="checkbox" name="etops" value="1"></td>
	</tr>
	<tr>
		<td>Plan Stepclimbs: </td>
		<td><input type="hidden" name="stepclimbs" value="0"><input type="checkbox" name="stepclimbs" value="1" checked></td>
	</tr>
	<tr>
		<td>Runway Analysis: </td>
		<td><input type="hidden" name="tlr" value="0"><input type="checkbox" name="tlr" value="1" checked></td>
	</tr>
	<tr>
		<td>Include NOTAMS: </td>
		<td><input type="hidden" name="notams" value="0"><input type="checkbox" name="notams" value="1" checked></td>
	</tr>
	<tr>
		<td>FIR NOTAMS: </td>
		<td><input type="hidden" name="firnot" value="0"><input type="checkbox" name="firnot" value="1"></td>
	</tr>
	<tr>
		<td>Flight Maps: </td>
		<td><select name="maps"><option value="detail">Detailed</option><option value="simple">Simple</option><option value="none">None</option></select></td>
	</tr>
</table>
	

<br>

<h3>You can also have hidden options. These are options that you can automatically fill in for your pilots, such as the aircraft registration, departure date, etc.
<br>
The more options you can automatically fill in for your pilots using data from your flight schedules, the more streamlined your dispatch system will be!
<br>
These options do not need be displayed to the user in your dispatch system, they can be passed in the background using <i>&lt;input type="hidden"&gt;</i> tags:</h3>

<br><br>


Airline code: ABC
<input type="hidden" name="airline" value="ABC"> 
<br>

Flight number: 1234
<input type="hidden" name="fltnum" value="1234"> 
<br>

Departure date: 01JAN14
<input type="hidden" name="date" value="01JAN14"> 
<br>

Departure time: 12:30Z
<input type="hidden" name="deph" value="12">
<input type="hidden" name="depm" value="30">	
<br>

Scheduled time enroute: 2:15
<input type="hidden" name="steh" value="2">
<input type="hidden" name="stem" value="15">
<br>

Aircraft registration: N123SB
<input type="hidden" name="reg" value="N123SB">	
<br>

Aircraft selcal code: GR-FS
<input type="hidden" name="selcal" value="GR-FS">	
<br>

Plan format: LIDO
<input type="hidden" name="planformat" value="lido">
<br>


<br>


	
<h3>Finally, include the submit button. This button is tied to a SimBrief javascript function (included in the simbrief.js file) by including the <i>onClick="simbriefsubmit();"</i> option.</h3>


<input type="button" onclick="simbriefsubmit('/simbrief/demo_output.php?test=1');" style="font-size:30px" value="Generate">


</form>

<br><br><br>


</body>
</html>
END;


?>