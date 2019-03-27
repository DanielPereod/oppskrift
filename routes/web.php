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

Route::get('/', 'RecipeController@home')->name('home');

Route::group(['prefix'=>'recipe'], function(){
    Route::get('/','RecipeController@index')->name('index');
    Route::get('/create', 'RecipeController@create')->name('create');
    Route::post('/create', 'RecipeController@save')->name('save');
    Route::get('/show', 'RecipeController@show')->name('show');
    Route::get('/edit/{id}', 'RecipeController@getById')->name('edit');
    Route::post('/edit/{id}', 'RecipeController@edit')->name('editsave');
    Route::get('/delete/{id}', 'RecipeController@delete')->name('delete');
    Route::get('/categories', 'RecipeController@showCategories')->name('categories');
    Route::get('/category/{id}', 'RecipeController@showRecipesByCategory')->name('showbycategory');
});
