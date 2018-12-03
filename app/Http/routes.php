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

Route::get("vlozit", 'NehnutelnostController@index');
Route::post("store", 'NehnutelnostController@store');
Route::get("inzeraty", 'NehnutelnostController@inzeraty');
Route::get("upravit/{idBudova}", 'NehnutelnostController@edit');
Route::post("update/{idBudova}", 'NehnutelnostController@update');
