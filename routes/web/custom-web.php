<?php
Route::get('/map', function () {
    return view('map');
})->middleware('auth');

Route::get('/forum', function () {
    return view('forum');
})->middleware('auth');

Route::get('/flp', function() {
    return view('flp');
})->middleware('auth');

Route::get('/wxr', function() {
    return view('wxr');
})->middleware('auth');

Route::get('/faq', function() {
    return view('faq');
})->middleware('auth');

Route::get('/', function() {
    return view('faq');
})->middleware('auth');


Route::group(['prefix' => '/flightops', 'namespace' => 'CrewOps', 'middleware' => 'auth', 'App\Http\Middleware\AdminPerms'], function() {

  Route::get('/stats', function () {
      return view('crewops.stats.view');
  });

    Route::get('schedule/create', 'fswireScheduleController@create');
    Route::post('schedule', 'fswireScheduleController@store');

});

Route::get('/', function () {
    return redirect('login');
});
