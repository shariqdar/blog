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
//Authentication Routes
Route::get('auth/login', 'Auth\LoginController@showLoginForm');
Route::post('auth/login',['as' =>'login', 'uses' => 'Auth\LoginController@login']);
Route::get('auth/logout', ['as' => 'logout','uses' =>'Auth\LoginController@logout']);
//Registration Routes
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('auth/register', 'Auth\RegisterController@register');

Route::get('blog/{slug}',['as' => 'blog.single', 'uses' =>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog',['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('Contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');
