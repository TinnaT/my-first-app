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
use App\User;
//Route::get('/', 'WelcomeController@index');

Route::get('/', 'HomeController@index');

Route::get('test', 'HomeController@test');

Route::get('about', 'HomeController@about');

Route::get('songs', 'HomeController@songs');

Route::get('songs/{id}', 'HomeController@show');

Route::get('create', 'HomeController@create');

//Route::get('songs/{slug}', 'HomeController@show');

//get('queen', 'SongController@queen');

//get()

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
