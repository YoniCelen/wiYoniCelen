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

Route::get('/', function () { return view('welcome'); });

//About

Route::get('/about', function () { return view('about'); });

//Shop

Route::get('/shop', function () { return view('shop'); });

//Payment

Route::post('/payment', ['as' => 'payment', 'uses' => 'App\Http\Controllers\PaymentController@payWithpaypal']);
Route::get('/payment/status',['as' => 'status', 'uses' => 'App\Http\Controllers\PaymentController@getPaymentStatus']);

//Contact

Route::get('/contact', 'App\Http\Controllers\ContactFormController@create');

Route::post('/contact', 'App\Http\Controllers\ContactFormController@store');

//News

Route::get('/news', 'App\Http\Controllers\NewsController@index');

Route::post('/news', 'App\Http\Controllers\NewsController@store');

Route::get('/news/edit/{id}', 'App\Http\Controllers\NewsController@edit');

Route::put('/news/update/{id}', 'App\Http\Controllers\NewsController@update');

Route::get('/news/create', 'App\Http\Controllers\NewsController@create');

Route::get('/news/{id}', 'App\Http\Controllers\NewsController@show');

//Users

Route::get('/users', 'App\Http\Controllers\UserController@index');

Route::get('/user/edit/{username}', 'App\Http\Controllers\UserController@edit');

Route::put('/user/makeadmin/{username}', 'App\Http\Controllers\UserController@makeAdmin');

Route::put('/user/update/{username}', 'App\Http\Controllers\UserController@update');

Route::get('/user/{username}', 'App\Http\Controllers\UserController@show');

//Forum

Route::get('/forum', 'App\Http\Controllers\ForumController@index');

Route::post('/forum', 'App\Http\Controllers\ForumController@store');

Route::get('/forum/edit/{id}', 'App\Http\Controllers\ForumController@edit');

Route::put('/forum/update/{id}', 'App\Http\Controllers\ForumController@update');

Route::get('/forum/create', 'App\Http\Controllers\ForumController@create');

Route::get('/forum/{id}', 'App\Http\Controllers\ForumController@show');

//FAQ

Route::get('/faq', 'App\Http\Controllers\FaqController@index');

Route::post('/faq', 'App\Http\Controllers\FaqController@store');

Route::get('/faq/edit/{id}', 'App\Http\Controllers\FaqController@edit');

Route::put('/faq/update/{id}', 'App\Http\Controllers\FaqController@update');

Route::get('/faq/create', 'App\Http\Controllers\FaqController@create');

Route::get('/faq/{id}', 'App\Http\Controllers\FaqController@show');
