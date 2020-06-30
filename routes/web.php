<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'BlogController@index')->name('home');
Route::get('/home', 'BlogController@index')->name('home');


Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post', 'PostController@store')->name('post.store');
Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
Route::put('/post/{id}', 'PostController@update')->name('post.update');
Route::delete('/post/{id}', 'PostController@destroy')->name('post.destroy');
Route::get('/post-detail/{id}', 'PostController@show')->name('post-detail.show');

Route::get('/profile', 'ProfileController@index')->name('profile.index');
