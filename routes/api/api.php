<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::group(['prefix' => 'v1', 'namespace' => 'API'], function () {
    Route::post('/auth', 'AuthAPI@acarsLogin');
    Route::group(['prefix' => '/acars'], function ()
    {
        Route::post('/posrpt', 'AcarsAPI@position');
        Route::get('/wx', 'AcarsAPI@getwx');
        Route::get('/data', 'AcarsAPI@getAcarsData');
    });
    // Airports Database Functions
    Route::group(['prefix' => '/airports'], function ()
    {
        Route::post('/', 'AirportsAPI@add');
    });
    // Schedule System
    Route::group(['prefix' => '/schedule'], function ()
    {
        Route::get('/', 'ScheduleAPI@index');
        Route::get('/bid', 'BidsAPI@getBid');
        Route::post('/bid', 'BidsAPI@fileBid');
        //Route::post('/', 'ScheduleAPI@add');
    });
    Route::get('/bids', 'BidsAPI@getBid');
    Route::post('/pireps', 'PIREPAPI@filePIREP');
    Route::get('/logbook/{id}', 'PIREPAPI@getFlight');
});

/*
|--------------------------------------------------------------------------
| VAOS External ACARS Compatibility API
|--------------------------------------------------------------------------
|
| This section of the API is to primarily support ACARS clients not
| implementing the VAOS Central API Standard. Usually developers
| will include VAOS specific interface files which call these
| routes. For more information, please check the website.
|
*/

Route::group(['prefix' => 'acars', 'namespace' => 'LegacyACARS'], function () {

    // smartCARS 2
    Route::group(['prefix' => 'smartCARS'], function () {
        Route::post('/positionreport', 'smartCARS@positionreport');
        Route::post('/filepirep', 'smartCARS@filepirep');
        Route::get('/bids/{user_id}', 'smartCARS@getbids');
    });

    // XACARS
    Route::group(['prefix' => 'xacars'], function () {

    });
});

Route::group(['prefix' => 'simbrief', 'namespace' => 'Simbrief'], function () {

    // SimbriefAPI function
    Route::get('/getapicode', 'SimBriefApiController@getApiCode');
    Route::get('/checkpageexist', 'SimBriefApiController@checkPageExist');
});

// VAMAcars
Route::group(['prefix' => 'vam', 'namespace' => 'Vamacars'], function () {
    Route::post('/vam_acars_remove_book_aircraft.php', 'VamacarsController@removeBookAircraft');
    Route::post('/vam_acars_get_aircraft.php', 'VamacarsController@getAircraft');
    Route::post('/vam_acars_pilot_connection.php', 'VamacarsController@pilotConnection');
    Route::post('/vamliveacars.php', 'VamacarsController@liveAcars');
    Route::post('/receivevampirep.php', 'VamacarsController@receiveVamPirep');
    Route::post('/receivevamevents.php', 'VamacarsController@receiveVamEvents');
    Route::post('/receivevamtracks.php', 'VamacarsController@receiveVamTracks');
    Route::post('/vam_acars_check_data.php', 'VamacarsController@checkData');
    Route::post('/vam_acars_delete_data.php', 'VamacarsController@deleteData');

});

//SmartCARS
Route::group(['prefix' => 'smartCARS', 'namespace' => 'SmartCARS'], function () {
    Route::post('/frame.php', 'SmartCARSApiController@index');
    Route::get('/frame.php', 'SmartCARSApiController@index');
});