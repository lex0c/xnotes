<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::group(['namespace' => 'Webapp', 'middleware' => 'auth', 'prefix' => '/user'], function() {
    Route::resource('/notes', 'NoteController');

    // Dashboard Controll
    Route::group(['namespace' => 'Panel', 'prefix' => '/panel'], function() {
        Route::resource('/', 'PanelController');
        Route::resource('/profile', 'ProfileController');
        Route::resource('/categories', 'CategoryController');
        //Route::resource('/messages', 'MessageController');
    });

});

