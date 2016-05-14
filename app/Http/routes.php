<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

use Illuminate\Support\Facades\App;

Route::get('/', function()
{
    return View::make('index'); // will return app/views/index.php
});

//This will redirect all missing routes to AngularJS Framework .
App::missing(function($exception)
{
    return View::make('index');
});
