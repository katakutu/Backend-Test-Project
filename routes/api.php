<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'product'], function(){
	Route::get('/','productController@index');
	Route::post('/','productController@store');
	Route::get('/{id}','productController@show');
	Route::put('/{id}','productController@update');
	Route::delete('/{id}','productController@destroy');
});