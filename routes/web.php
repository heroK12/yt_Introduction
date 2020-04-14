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

Route::get('/', 'PostController@index');

Route::resource('posts','PostController');

Route::resource('tags','TagController');
Route::resource('channel','ChannelController');
Route::get('search','SearchController@search');
Route::resource('user','UserController');
Route::get('mypage','UserController@mypost');
Route::get('mylikes','LikeController@LikePosts');

// Route::get('posts','PostController@index');
// //whereは正規表現でidの数字のみ
// Route::get('posts/{post}','PostController@show')->name('posts.show');
// Route::post('posts','PostController@store');
