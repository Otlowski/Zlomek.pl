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

    /*Homepage*/
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/', 'Cars\CarsController@listCars');
    /*TYLKO ZALOGOWANY UŻYTKOWNIK*/
    Route::group(['middleware' => 'auth'], function () {
        //posiada uprawnienia do dodawania ogłoszeń
        Route::get('/addcar', ['uses' => 'Cars\CarsController@addCar']);
        Route::post('/addcar', ['uses' => 'Cars\CarsController@addCar']);
//        Route::post('/addcar',['uses' => 'Cars\CarsController@addImage']);
        //posiada uprawnienia do szczegółowego wyszukiwania
        Route::get('/search', function () {return view('search');});
});
    
   
//Route::get('/home', 'Users\UserController@listUsers');

    Auth::routes();

    Route::get('/home', 'HomeController@index');
});

