<?php



Route::prefix('admin')->group(function(){
    Auth::routes();

    Route::any('sendToken' , 'BackEnd\ConfigrationController@sendToken')->name('forget.password');
    Route::any('paswordreset/{id}/{token}' , 'BackEnd\ConfigrationController@paswordreset');
    // Route::post('login', 'BackEnd\UserController@login');
    Route::middleware('auth')->namespace('BackEnd')->group(function () {

        Route::get('/', 'ConfigrationController@index');
        Route::resource('configrations', 'ConfigrationController');
        Route::resource('users', 'UserController');      
        Route::resource('services', 'ServiceController');
        Route::resource('clients', 'ProjectController');
        Route::resource('fields', 'ProjectController');
        Route::resource('employees', 'UnitController');
        Route::resource('clientreviews', 'ClientReviewController');
        Route::resource('images', 'VideoController'); 
        Route::resource('videos', 'VideoController'); 
        Route::resource('contactuses', 'ContackUsController'); 
    });
});
