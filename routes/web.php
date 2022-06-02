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

Route::get('/', 'App\Http\Controllers\LolController@getWelcome');
Route::get('/us', 'App\Http\Controllers\LolController@getUs');
Route::get('/micro', 'App\Http\Controllers\LolController@getMicro');
Route::get('/macro', 'App\Http\Controllers\LolController@getMacro');
Route::get('/champions', 'App\Http\Controllers\LolController@getChampions');
Route::get('/search', 'App\Http\Controllers\LolController@getSearch');
Route::get('/news', 'App\Http\Controllers\LolController@getNews');
Route::get('/pyke', 'App\Http\Controllers\LolController@getPyke')->name('pyke');
Route::post('/pyke/reply', 'App\Http\Controllers\LolController@setReply');
Route::get('/error', 'App\Http\Controllers\LolController@getError');
