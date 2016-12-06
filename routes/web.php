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
    return view('welcome');
});

/*MODULE ROUTES*/


Route::get('/', 'Cars\CarsController@listCars');

//Route::get('/home', 'Users\UserController@listUsers');

Auth::routes();

Route::get('/home', 'HomeController@index');
