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
//     return view('auth.login');
// });

// Auth::routes();

Route::get('/', 'LoginController@showLoginForm')->name('login');
Route::post('/', 'LoginController@login');

Route::resource('requisition', 'RequisitionController');
Route::resource('users', 'UsersController');

Route::get('/home', 'HomeController@index')->name('home');
