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

Route::get('/', 'ArticleController@index');

// create
Route::get('create', 'ArticleController@create');
Route::post('create', 'ArticleController@store');

// update
Route::get('edit/{id}', 'ArticleController@edit');
Route::post('edit', 'ArticleController@update');
