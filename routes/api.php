<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    Route::get('configrations', [APIController::class, 'configrations']);
    Route::get('services/{id?}', [APIController::class, 'services']);
    Route::get('clients/{id?}', [APIController::class, 'clients']);
    Route::get('fields/{id?}', [APIController::class, 'fields']);
    Route::get('employees/{id?}', [APIController::class, 'employees']);
    Route::get('client-reviews/{id?}', [APIController::class, 'client_reviews']);
    Route::get('videos/{id?}', [APIController::class, 'media']);
    Route::get('jobs/{id?}', [APIController::class, 'jobs']);
    Route::get('sliders', [APIController::class, 'media']);
});
