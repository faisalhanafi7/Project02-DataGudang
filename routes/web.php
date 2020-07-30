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
    return view('home');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','DashboardController@index');
	Route::get('/toko','TokoController@index');
	Route::post('/toko/create','TokoController@create');
	Route::get('/toko/{id}/edit','TokoController@edit');
	Route::post('/toko/{id}/update','TokoController@update');
	Route::get('/toko/{id}/delete','TokoController@delete');
	Route::get('/toko/{id}/profile','TokoController@profile');
});
	