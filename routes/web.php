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

Route::resource('/', 'MainPage')->middleware('auth');
Route::resource('/posts', 'Posts')->middleware('auth');
Route::resource('/comments', 'Comments');
Auth::routes();

Route::get('/home', 'HomeController@index');
