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

Route::get('/', 'PageController@index');
Route::get('/service', 'PageController@services');
Route::get('/about', 'PageController@about');


Route::resource('posts', 'PostController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
