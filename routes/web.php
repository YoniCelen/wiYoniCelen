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

//Users

Route::get('/users', 'App\Http\Controllers\UserController@index');

Route::get('/users/{username}', 'App\Http\Controllers\UserController@show');
