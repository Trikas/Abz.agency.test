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

Route::get('/', 'IndexPage@show');
Route::get('admin','AdminPanel@show')->name('admin')->middleware('auth');
Route::get('all_pers', 'TablePersonal@show')->name('all_personal');
Route::get('sort', 'SortData@Sort');
Route::get('search', 'SearchData@search');
Route::get('convSort', 'ConvIconSort@convIcon');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
