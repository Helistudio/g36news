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

Route::get('/', 'NewsController@getNews')->name('h39.news');
Route::get('/lich-su-trieu-hoi', 'NewsController@getGachaHistory')->name('h39.gachaHistory');
Route::get('/chi-tiet-trieu-hoi', 'NewsController@getGachaDetail')->name('h39.gachaDetail');
Route::get('/chi-tiet-trieu-hoi-2', 'NewsController@getGachaDetail')->name('h39.gachaDetail');
Route::get('/chi-tiet-trieu-hoi-4', 'NewsController@getGachaDetailFre')->name('h39.gachaDetailFre');
Route::get('/chi-tiet-trieu-hoi-gioi-han', 'NewsController@getLimitedGachaDetail')->name('h39.limitedGachaDetail');
Route::get('/battle-intro', 'NewsController@battleIntro')->name('h39.battleIntro');
