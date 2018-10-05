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

Route::get('/', 'HomeController@home');
Route::get('result', 'HomeController@result');
Route::get('upload', 'AdminController@upload');
Route::post('upload', 'AdminController@uploadAttempt');
Route::post('search', 'HomeController@search');
