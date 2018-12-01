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
Route::get('/admin','AdminController@index') ;
Route::get('/myreservation', 'RoomController@myreservation');
Route::delete('/myreservation/{id}','RoomController@destroyMyreservation');
// 7 Routes = Restful API


Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();
