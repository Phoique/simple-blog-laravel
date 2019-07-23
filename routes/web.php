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

// Post detayına girildiğinde gösterilen route.
Route::get('/post/{slug?}', 'PostController@postDetail')->name('detail');

// Giriş route.
Route::get('/login', 'LoginController@loginView')->name('login');

// Kayıt route.
Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/register', 'RegisterController@create')->name('register.create');

// İçereği değişmeyen ve değer yollanmayan sabit sayfalar.
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');