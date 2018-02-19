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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/signup/validate', 'registrationFormController@validator');
Route::group(['middleware' => 'auth'], function () {
    Route::post('/subscribe', 'SubscriptionsController@store');
    Route::get('/plan/{plan}', 'PlansController@show');
    Route::get('/braintree/token', 'BraintreeTokenController@token');
});
Route::get('/states', 'stateController@states');
Route::get('/states/{zip}', 'stateController@stateByZip');
