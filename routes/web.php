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

// Route for home

Route::get('/', 'HomeController@getIndex')->name('home');

// User Routes
Route::get('/user/show/{id}', 'UserController@show')->name('user.show');

// User Home Routes (testing)

Route::get('/user', 'PostController@getIndex')->name('home.user');


//userProfile Route

Route::get('/user/profile', 'ProfileController@getIndex')->name('user.profile');

//EditProfile Route

Route::get('/user/profile/edit', 'ProfileController@getEdit')->name('profile.edit');

Route::get('/about', 'HomeController@getAbout')->name('about');

Route::get('/author', 'HomeController@getAuthor')->name('author');

//Change password Route

Route::get('/user/profile/changepass', 'ProfileController@editPass')->name('password.change');


// Post Routes
Route::get('/post/create', 'PostController@getCreate')->name('post.create');
Route::post('/post/store', 'PostController@postCreate')->name('post.store');
Route::get('/post/edit/{id}', 'PostController@getEdit')->name('post.edit');
Route::post('post/update/{id}', 'PostController@postEdit')->name('post.update');
Route::get('post/delete/{id}', 'PostController@getDelete')->name('post.delete');
Route::get('/post/{id}', 'PostController@getShow')->name('post.show');

// Category Routes
Route::get('/categories', 'CategoryController@getIndex')->name('categories.index');
Route::get('/category/{id}', 'CategoryController@getShow')->name('category.show');
Route::get('/category/create', 'CategoryController@getCreate')->name('category.create');
Route::post('/category/store', 'CategoryController@postCreate')->name('category.store');
Route::get('/category/edit/{id}', 'CategoryController@getEdit')->name('category.edit');
Route::post('/category/update/{id}', 'CategoryController@postEdit')->name('category.update');
Route::get('/category/delete/{id}', 'CategoryController@getDelete')->name('category.delete');

// Tag Routes
Route::get('/tags', 'TagController@getIndex')->name('tags.index');
Route::get('/tag/{id}', 'TagController@getShow')->name('tag.show');
Route::get('/tag/create', 'TagController@getCreate')->name('tag.create');
Route::post('/tag/store', 'TagController@postCreate')->name('tag.store');
Route::get('/tag/edit/{id}', 'TagController@getEdit')->name('tag.edit');
Route::post('/tag/update/{id}', 'TagController@postEdit')->name('tag.update');
Route::get('/tag/delete/{id}', 'TagController@getDelete')->name('tag.delete');
