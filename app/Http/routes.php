<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Inzeraty
Route::get("inzerat/vlozit", 'NehnutelnostController@index');
Route::post("inzerat/store", 'NehnutelnostController@store');
Route::get("inzerat/zobrazit/{idInzerat}", 'NehnutelnostController@show');
Route::get("inzerat/inzeraty", 'NehnutelnostController@inzeraty');
Route::get("inzerat/upravit/{idInzerat}", 'NehnutelnostController@edit');
Route::post("inzerat/update/{idInzerat}", 'NehnutelnostController@update');
Route::post("inzerat/delete/{idInzerat}", 'NehnutelnostController@destroy');
Route::get("inzerat/obrazok/{idInzerat}", 'NehnutelnostController@obrazok');
Route::post("inzerat/addobrazok/{idInzerat}", 'NehnutelnostController@addobrazok');
Route::get("inzerat/editobrazok/{idFotky}", 'NehnutelnostController@editobrazok');
Route::post("inzerat/updateobrazok/{idFotky}", 'NehnutelnostController@updateobrazok');
Route::post("inzerat/deleteobrazok/{idFotky}", 'NehnutelnostController@deleteobrazok');

// Home page
Route::get("home", 'NehnutelnostController@home');

//Kontakt
Route::get("info", 'NehnutelnostController@info');

//Stránka používateľa
Route::get("user/user", 'PouzivatelController@index');
Route::get("user/inzeraty", 'PouzivatelController@inzeraty_pouzivatel');
Route::get("user/pouzivatel_edit", 'PouzivatelController@pouzivatel_edit');
Route::post("user/pouzivatel_update", 'PouzivatelController@pouzivatel_update');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


