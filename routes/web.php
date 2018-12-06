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
Route::get('/usercreate', 'UserController@index');

Route::get('/room/reservations/{id}', 'ReservationsController@index');
Route::delete('/room/reservations/{id}', 'ReservationsController@destroy');
Route::post('/room/reservations/{id}', 'ReservationsController@create');
Route::delete('/room/reservations/{id}', 'ReservationsController@destroyReserve');

Route::get('/room/adminreservations/{id}', 'AdminreservationsController@index');
Route::post('/room/adminreservations/{id}', 'AdminreservationsController@create');
Route::delete('/room/adminreservations/delete/{id}', 'AdminreservationsController@destroyReserve');

Route::get('/room/addtable/{id}', 'TableController@table');
Route::post('/room/addtable/add/{id}', 'TableController@addtable');
Route::delete('/room/addtable/delete/{id}', 'TableController@delete');

Route::get('/room/view/{id}', 'RoomController@view');
Route::get('/myreservation', 'RoomController@myreservation');
Route::delete('/myreservation/{id}','RoomController@destroyMyreservation');
Route::post('/room/create', 'RoomController@store');
Route::post('/room/edit/{id}', 'RoomController@edit');
Route::post('/room/delete/{id}', 'RoomController@delete');

Route::get('/room/usercreate/{id}','UserController@changepassword');
Route::put('/room/usercreate/{id}','UserController@updatepassword');


Route::get('/manageid','AdminController@manageid') ;
Route::delete('/manageid/{id}','AdminController@destroy');
Route::put('/manageinfo/{id}','AdminController@updateinfo');
// Route::get('/manageid/{id}','AdminController@changepassword');
Route::put('/manageid/{id}','AdminController@updatepassword');

// 7 Routes = Restful API

Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::post('/createuser','AdminController@register');

Auth::routes();
