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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'recipe'], function(){
    Route::get('/','RecipeController@index')->name('index');
    Route::get('/create', 'RecipeController@create')->name('create');
    Route::post('/save', 'RecipeController@save')->name('save');
    Route::get('/show', 'RecipeController@show')->name('show');
});
