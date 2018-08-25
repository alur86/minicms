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


Route::group(['middleware' => 'web'], function () {
    Route::auth(); 
});

Auth::routes();


Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');

Route::get('/', 'ArticlesController@index')->name('home');
Route::get('news', 'NewsController@index')->name('news');
Route::get('/news_show/{slug}', 'NewsController@show')->name('news_show');
Route::get('images', 'ImagesController@index')->name('images');
Route::get('/gallery_show/{slug}', 'GalleriesController@show')->name('gallery_show');