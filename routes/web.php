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

// auth routes

Route::get('/auth/register', 'RegisterController@showRegistrationForm')->name('user.register');
Route::post('/auth/register/check', 'RegisterController@checkUser')->name('user.register-check');
Route::post('/auth/register/student', 'RegisterController@register')->name('student.register');
Route::get('/auth/login', 'LoginController@index')->name('user.login');
Route::post('/auth/login', 'LoginController@login')->name('login');
Route::post('/auth/logout', 'LoginController@logout')->name('logout');


// Route for home

Route::get('/', 'HomeController@getIndex')->name('home');


// User Home Routes (testing)

Route::get('/user', 'PostController@getIndex')->name('home.user');
// User Routes
Route::get('/user/show/{id}', 'UserController@show')->name('user.show');

//userProfile Route

Route::get('/user/profile', 'ProfileController@getIndex')->name('user.profile');
Route::get('/user/message', 'ProfileController@getMessage')->name('user.message');

//EditProfile Route

Route::get('/user/profile/edit', 'ProfileController@getEdit')->name('profile.edit');

//About us Route
Route::get('/about', 'HomeController@getAbout')->name('about');


//Author Route
Route::get('/author/{id}', 'HomeController@getAuthor')->name('author');
Route::get('/author/message/{id}', 'HomeController@getMessage')->name('message');
Route::post('/author/message/{id}', 'HomeController@postMessage')->name('message_post');

//Change password Route

Route::get('/user/profile/changepass', 'ProfileController@editPass')->name('password.change');


// Post Routes
Route::get('/post/create', 'PostController@getCreate')->name('post.create');
Route::post('/post/store', 'PostController@postCreate')->name('post.store');
Route::get('/post/edit/{slug}', 'PostController@getEdit')->name('post.edit');
Route::post('post/update/{id}', 'PostController@postEdit')->name('post.update');
Route::get('post/delete/{id}', 'PostController@getDelete')->name('post.delete');
Route::get('/post/{slug}', 'PostController@getShow')->name('post.show');
Route::post('/post/{post_id}/{user_id}', 'PostController@postRating')->name('post.rating');
Route::get('/post/file/{post_id}', 'PostController@getDownloadFile')->name('file.download');
Route::post('/comments/{post_id}', 'CommentsController@store')->name('comments.store');

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

//Admin

Route::get('/admin/index', 'AdminController@getIndex')->name('admin.index');
Route::get('/admin/posts', 'AdminController@getPost')->name('admin.posts');
Route::get('/admin/categories', 'AdminController@getCategories')->name('admin.categories');
Route::get('/admin/categories/edit/{id}', 'AdminController@getCategoriesEdit')->name('admin.categoryedit');
Route::get('/admin/tags', 'AdminController@getTags')->name('admin.tags');
Route::get('/admin/tags/edit/{id}', 'AdminController@getTagsEdit')->name('admin.tagsedit');
Route::get('/admin/users', 'AdminController@getUser')->name('admin.users');
Route::post('/admin/category/store', 'AdminController@categoryStore')->name('admin.category_store');
Route::post('/admin/tag/store', 'AdminController@tagStore')->name('admin.tag_store');
Route::post('/admin/category/update/{id}', 'AdminController@updateCategory')->name('admin.category_update');
Route::post('/admin/tag/update/{id}', 'AdminController@updateTag')->name('admin.tag_update');
Route::get('/admin/category/delete/{id}', 'AdminController@destroyCategory')->name('admin.category_delete');
