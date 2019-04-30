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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/empruntE','EmpruntEmisController');
Route::resource('/empruntE.detail','EmpruntEmisController@detail');
Route::resource('/empruntE.store','EmpruntEmisController@store');
Route::resource('/empruntS','EmpruntSouscritController');
Route::resource('/fond','FondPlacementController');
Route::resource('/index','HomeController');

