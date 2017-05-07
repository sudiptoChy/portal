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

Route::get('/', function () {
    return view('welcome');
});

// Post Routes
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/post/{id}', 'PostController@show')->name('post.show');

// Category Routes
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/category/{id}', 'CategoryController@show')->name('category.show');

// Tag Routes
Route::get('/tags', 'TagController@index')->name('tags.index');
Route::get('/tag/{id}', 'TagController@show')->name('tag.show');
