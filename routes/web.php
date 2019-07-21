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

Route::get('/','LoginController@index' );
Route::get('/login',  'LoginController@index')->name('login');
Route::get('/logout',  'LoginController@logout')->name('logout');
Route::post('/acceder',  'LoginController@login')->name('acceder');





Route::get('/bus',  'BusController@index')->name('bus');
Route::delete('/bus',  'BusController@delete')->name('bus');
Route::get('/bus/profile',  'BusController@profile');
Route::get('/bus/all',  'BusController@all') ;
Route::get('/rutas',  'LoginController@index')->name('rutas');
Route::get('/conductor',  'LoginController@index')->name('conductor');

Route::post('/bus',  'BusController@storage')->name('bus');




Route::get('/driver',  'DriverController@index') ;
Route::delete('/driver',  'DriverController@delete') ;
Route::get('/driver/profile',  'DriverController@profile');
Route::get('/driver/all',  'DriverController@all') ; 

Route::post('/driver',  'DriverController@storage') ;


Route::get('/qrcode',  'QrcodeController@index') ;
Route::delete('/qrcode',  'QrcodeController@delete') ;
Route::get('/qrcode/profile',  'QrcodeController@profile');
Route::get('/qrcode/all',  'QrcodeController@all') ; 

Route::post('/qrcode',  'QrcodeController@storage') ;





Route::get('/routes',  'RoutesController@index') ;
Route::delete('/routes',  'RoutesController@delete') ;
Route::get('/routes/profile',  'RoutesController@profile');
Route::get('/routes/all',  'RoutesController@all') ; 

Route::post('/routes',  'RoutesController@storage') ;


