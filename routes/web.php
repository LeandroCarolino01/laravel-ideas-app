<?php

use Illuminate\Support\Facades\Route;

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

Route::get('ideas', 'IdeasController@index');
Route::get('ideas/{idea}', 'IdeasController@show');
Route::get('new-ideas', 'IdeasController@create');
Route::post('store-ideas', 'IdeasController@store');
Route::get('ideas/{idea}/edit', 'IdeasController@edit');
Route::post('ideas/{idea}/update-ideas', 'IdeasController@update');
Route::get('ideas/{idea}/delete', 'IdeasController@destroy');
Route::get('ideas/{idea}/complete', 'IdeasController@complete');