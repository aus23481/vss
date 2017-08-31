<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {

    return view('home');
});




Route::get('/booking', 'booking@index');
Route::get('/booking/add', 'BookingController@addBookingInfo');
Route::get('/booking/test', 'BookingController@addBookingInfoTest');
Route::get('/test', 'BookingController@test');
Auth::routes();

Route::get('/home', 'HomeController@index');
