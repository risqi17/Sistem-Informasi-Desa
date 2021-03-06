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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/', 'FrontController@index');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/auth/login', 'Auth\LoginController@index')->name('login');
Route::post('/auth/dologin', 'Auth\LoginController@dologin')->name('dologin');
Route::get('/auth/logout', 'Auth\LoginController@logout')->name('logout');
