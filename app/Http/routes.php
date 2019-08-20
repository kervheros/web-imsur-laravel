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

Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');

Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset','Auth\PasswordController@postReset');

Route::get('register/verify/{code}','FrontController@verify');


Route::resource('factura','FacturasController');
Route::get('pdf','FacturasController@invoice');

Route::get('pdf',function(){
  //$pdf = App::make('dompdf.wrapper');

  $pdf =PDF::loadView('facturaciones.vista2');

  return $pdf->stream('prueba.pdf');
});

/*Route::get('pdf',function(){
  $users=IMSUR\User::all();
  $pdf=PDF::loadView('vista',['users'=>$users]);
  return $pdf->stream('archivo.pdf');
});*/
