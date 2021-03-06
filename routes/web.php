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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/home', function () {
//    return view('blog_theme.pages.home');
//});
//
//Route::get('/add-post', function () {
//    return view('blog_theme.pages.addPost');
//});

Route::get('/', 'PostsController@index');
Route::get('/add-post', 'PostsController@create');
Route::post('/store', 'PostsController@store');
Route::get('/post/{post}', 'PostsController@showPost');