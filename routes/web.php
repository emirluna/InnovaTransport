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
    return view('welcome');
});


Route::get('features', function (){
    return view('feature');
 });
 
 Route::get('prices', function (){
    return view('prices');
 });
 
Route::resource('/enterprise', 'EnterpriseController');

Route::resource('/driver', 'DriversController');

Route::resource('/office', 'OfficeController');

Route::resource('/customer', 'CustomerController');

Route::resource('/vehicle', 'VehicleController');

Route::get('/choferes/{id}', 'DriversController@getDriver');

Route::get('/clientes/{id}', 'CustomerController@getCustomer');

Route::get('/vehiculos/{id}', 'VehicleController@newVehicle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
