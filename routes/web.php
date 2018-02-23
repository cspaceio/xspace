<?php



Route::get('/', function () {
    return view('welcome');
});


// Myung Ki -> Site /
Route::get('site', 'SiteController@index');

