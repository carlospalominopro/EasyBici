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

Route::get('/Home', 'BiciUserController@index');
Route::post('/Home', 'BiciUserController@indexpost');

//Route::get('public/Home', 'BiciUserController@index');

/*
Route::get('Home',function(){

    return view('Home.index');
});*/