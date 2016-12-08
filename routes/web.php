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





/* MODULE ROUTES */
Route::group(['middleware' => ['web']], function () {


    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/search', function () {
        return view('search');
    });
    Route::get('/', 'Cars\CarsController@listCars');
    
    Route::get('/addcar', [     //niezalogowany nie posiadasz uprawnien do
        'middleware' => 'auth', //dodawania ogloszen
        'uses' => 'Cars\CarsController@addCar']);

    Route::post('/newcar', 'Cars\CarsController@newCar');
    

//Route::get('/home', 'Users\UserController@listUsers');

    Auth::routes();

    Route::get('/home', 'HomeController@index');
});

