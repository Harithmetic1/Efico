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
Route::get('/registration', 'PagesController@register');
Route::post('/subscribe', 'PagesController@subscribe');
Route::post('/new/admin', 'PagesController@makeAdmin');
Route::post('/new/news', 'PagesController@makeNews');
Route::post('/new/training', 'PagesController@newTraining');
Route::post('/training/register', 'PagesController@trainingReg');
Route::get('/delete/news/{id}', 'PagesController@deleteNews');
Route::get('/delete/training/{id}', 'PagesController@deleteTraining');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
