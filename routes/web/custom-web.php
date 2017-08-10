<?php
Route::get('/map', function () {
    return view('map');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/wxr', function () {
    return view('wxr');
});

Route::get('/flp', function () {
    return view('flp');
});
Route::group(['prefix' => '/flightops', 'namespace' => 'CrewOps', 'middleware' => 'auth', 'App\Http\Middleware\AdminPerms'], function() {});
Route::get('/', function () {
    return redirect('login');
});
