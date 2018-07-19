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
use App\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', 'PostController@create')->name('create');
Route::get('/posts/{id}', 'PostController@show'); // moguce dodavanje naziva za lakse prepoznavanje sa kljucem 'as'
Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@store');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');


Route::get('/logout', 'LoginController@destroy');
Route::get('/login', 'LoginController@create')->name('login'); // ovo smo dodavali zbog nekakve greske koja je iskakala ali ne znam kakve
Route::post('/login', 'LoginController@store');


