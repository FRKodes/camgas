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

Route::get('/', 'PagesController@home');
Route::get('quienes-somos', 'PagesController@quienes');
Route::get('socios', 'PagesController@socios');
Route::get('empresas-reguladoras', 'PagesController@reguladoras');
Route::get('precios-del-gas-lp', 'PagesController@precios');
Route::get('normatividad', 'PagesController@normatividad');
Route::get('manejo-de-riesgos', 'PagesController@riesgos');
Route::get('contacto', 'PagesController@contacto');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
