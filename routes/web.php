<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', function() {
    return view('helloWorld');
});

Route::get('getHandyList', function() {
    return view('getHandyList');
});

Route::get('filter/{hersteller}', function($hersteller) {
    return "todo";
})

Route::get('Programmname', function() {
    return 'Nachricht von Programmname. Ich komme aus der Datei ' . __FILE__;
});

Route::get('create', 'ItController@create');

Route::get('toggle', 'SchaltController@toggle');
