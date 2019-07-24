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

// Tüm postların gösterildiği anasayfa route.
Route::get('/', 'HomeController@index')->name('home');

// Post ile ilgili route.
Route::get('/post/add', 'PostController@index')->name('post.index');
Route::post('/post/add', 'PostController@create')->name('post.create');
Route::get('/post/{slug?}', 'HomeController@show')->name('index');

// İçereği değişmeyen ve değer yollanmayan sabit sayfalar.
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Auth::routes();