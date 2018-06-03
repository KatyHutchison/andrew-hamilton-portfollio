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

Route::get('/', 'ProjectController@index');
Route::post('/contact', 'ContactController@processMessage');
Route::get('/contact', 'ContactController@create');
Route::get('/project/{project}', 'ProjectController@show');
Route::get('/about', 'AboutController@about');
