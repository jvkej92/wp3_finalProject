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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/braintree/token', 'BraintreeTokenController@token');
    // Route::post('/plans/subscribe', 'PlansController@subscribe')->name('subscribe');
    // Route::get('/plans/subscribe', function(){
    //     return redirect('/');
    // });        
    // Route::get('/plans', 'PlansController@index');   
    Route::get('/subscribe/plans', 'subscribeController@plans');
    Route::post('/subscribe/payment', 'subscribeController@payment'); 
    Route::post('subscribe/process', 'subcsribeController@validate');
    Route::post('/subscribe/process/payment', 'subscribeController@process'); 
    Route::get('/dashboard', 'DashboardController@index');
});

Route::get('/subscribe', 'subscribeController@register');

Route::get('/states', 'stateController@states');
Route::get('/states/{zip}', 'stateController@stateByZip');


// Route::get('/states', 'stateController@states');
// Route::get('/states/{zip}', 'stateController@stateByZip');
