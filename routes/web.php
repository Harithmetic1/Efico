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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/services', 'PagesController@services');
Route::get('/news', 'PagesController@news');
Route::get('/faqs', 'PagesController@faqs');
Route::get('/pay', 'PagesController@pay');
Route::post('/subscribe', 'PagesController@subscribe');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
