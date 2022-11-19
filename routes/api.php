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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('cors')->group(function () {
    Route::get('configrations', 'APIController@configrations');
    Route::get('services/{id?}', 'APIController@services');
    Route::get('clients/{id?}', 'APIController@clients');
    Route::get('fields/{id?}', 'APIController@fields');
    Route::get('employees/{id?}', 'APIController@employees');
    Route::get('client-reviews/{id?}', 'APIController@client_reviews');
    Route::get('videos/{id?}', 'APIController@media');
    Route::get('jobs/{id?}', 'APIController@jobs');
    Route::get('sliders', 'APIController@media');
});
