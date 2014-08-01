<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});


/* Administrator */
Route::resource('administrator','AdminController');

Route::resource('register', 'RegisterController');
Route::resource('department', 'RegisterController@showDepartment');
Route::post('department', 'RegisterController@storeDepartment');

Route::get('login', function(){
	return View::make('accounting.login');
});

