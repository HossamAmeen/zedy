<?php

use App\Http\Controllers\BackEnd\ClientController;
use App\Http\Controllers\BackEnd\ClientReviewController;
use App\Http\Controllers\BackEnd\ConfigrationController;
use App\Http\Controllers\BackEnd\ContackUsController;
use App\Http\Controllers\BackEnd\EmployeeController;
use App\Http\Controllers\BackEnd\FieldController;
use App\Http\Controllers\BackEnd\ImagesController;
use App\Http\Controllers\BackEnd\JobController;
use App\Http\Controllers\BackEnd\ServiceController;
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\BackEnd\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::any('sendToken', [ConfigrationController::class, 'sendToken'])->name('forget.password');
Route::any('paswordreset/{id}/{token}', [ConfigrationController::class, 'paswordreset']);

Route::middleware('auth')->group(function () {
    Route::get('/', [ConfigrationController::class, 'index']);
    Route::get('profile', [ConfigrationController::class, 'profile'])->name('profile');
    Route::resource('configrations', ConfigrationController::class);
    Route::resource('users', UserController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('fields', FieldController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('clientreviews', ClientReviewController::class);
    Route::resource('jobs', JobController::class);
    Route::resource('images', ImagesController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('contactuses', ContackUsController::class);
});
