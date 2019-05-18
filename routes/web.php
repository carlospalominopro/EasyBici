<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/Login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/Login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout');




Route::get('/', 'RegisterUserController@index');

Route::post('/registers', 'RegisterUserController@create');

Route::post('/registersBike', 'RegisterBikeController@create');

Route::post('/consulta', 'QueryController@index');

Route::get('/BikeUser', 'BikeUserController@index');

Route::get('/BikeUser/update', 'BikeUserController@update');
Route::get('/BikeUser/destroy', 'BikeUserController@destroy');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
