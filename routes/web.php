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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Home

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Welcome

Route::get('/', function () {
    return view('welcome');
});

//About

Route::get('/about', function () {
    return view('about');
});

//Contact

Route::get('/contact', function () {
    return view('contact');
});

//News

Route::get('/news', 'App\Http\Controllers\NewsController@index');

Route::get('/news/{id}', 'App\Http\Controllers\NewsController@show');

Route::get('/news/edit/{id}', 'App\Http\Controllers\NewsController@edit');

Route::get('/news/update/{id}', 'App\Http\Controllers\NewsController@update');

Route::get('/news/create', 'App\Http\Controllers\NewsController@create');

//Users

Route::get('/users', 'App\Http\Controllers\UserController@index');

Route::get('/user/{username}', 'App\Http\Controllers\UserController@show');

Route::get('/user/edit/{username}', 'App\Http\Controllers\UserController@edit');

Route::get('/user/update/{username}', 'App\Http\Controllers\UserController@update');

Route::get('/user/makeadmin/{username}', 'App\Http\Controllers\UserController@makeAdmin');


