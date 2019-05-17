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
Route::get('/','FrontController@index');

Route::get('admin','FrontController@admin');

Route::get('contacto', 'FrontController@cont');

Route::get('home', 'HomeController@index');



Route::resource('usuario','UserController');
Route::resource('log','LogController');

Route::get('logout','LogController@logout');

Route::get('login','FrontController@log');
Route::get('register','FrontController@create');

Route::resource('auth','FrontController');

Route::resource('mail','MailController');
