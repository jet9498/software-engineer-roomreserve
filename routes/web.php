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

Route::get('/', 'HomeController@index');
Route::get('/room/reservations/{id}', 'ReservationsController@index');
Route::post('/room/reservations/{id}', 'ReservationsController@create');
Route::get('/room/addtable/{id}', 'TableController@table');
Route::post('/room/addtable/add/{id}', 'TableController@addtable');
Route::get('/room/view/{id}', 'RoomController@view');

// 7 Routes = Restful API
Route::get('/movies','MovieController@index');
Route::get('/movies/create','MovieController@create');
Route::post('/movies','MovieController@store');
Route::get('/movies/{id}','MovieController@show');
Route::get('/movies/{id}/edit','MovieController@edit');
Route::put('/movies/{id}','MovieController@update');
Route::delete('/movies/{id}','MovieController@destroy');

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();
