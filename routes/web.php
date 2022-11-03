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
        Route::resource('news', 'NewsController');
        Route::resource('projects', 'ProjectController');
        Route::resource('units', 'UnitController');
        Route::resource('images', 'ImagesController');
        Route::resource('videos', 'VideoController'); 
        Route::resource('contactuses', 'ContackUsController'); 
    });
});

Route::get('change-language/{lang}', 'HomeController@change_language')->name('change-language');
Route::prefix('{lang}')->group(function(){
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('servies', 'HomeController@news')->name('news');
    Route::get('news/{id}', 'HomeController@show_news')->name('news');
    Route::get('projects', 'HomeController@projects')->name('projects');
    Route::get('projects/{id}', 'HomeController@project')->name('project');
    Route::get('units/{id}', 'HomeController@unit')->name('unit');
    Route::get('media', 'HomeController@media')->name('media');
    Route::get('about-us', 'HomeController@about_us')->name('about-us');
    Route::get('search', 'HomeController@search')->name('search');
});
Route::get('/', 'HomeController@home')->name('index');
Route::post('contact-us', 'HomeController@contact_us')->name('contact-us