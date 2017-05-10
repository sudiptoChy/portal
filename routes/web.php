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

Route::get('/', 'PostController@getIndex')->name('home');

//Home Page

Route::get('/home-dip', 'PostController@getIndex')->name('home-dip');

// Post Routes
Route::get('/post/create', 'PostController@getCreate')->name('post.create');
Route::post('/post/store', 'PostController@postStore')->name('post.store');
Route::get('/post/edit/{id}', 'PostController@getEdit')->name('post.edit');
Route::post('post/update/{id}', 'PostController@postEdit')->name('post.update');
Route::get('post/delete/{id}', 'PostController@getDelete')->name('post.delete');
Route::get('/post/{id}', 'PostController@getShow')->name('post.show');

// Category Routes
Route::get('/categories', 'CategoryController@getIndex')->name('categories.index');
Route::get('/category/{id}', 'CategoryController@getShow')->name('category.show');

// Tag Routes
Route::get('/tags', 'TagController@getIndex')->name('tags.index');
Route::get('/tag/{id}', 'TagController@getShow')->name('tag.show');
