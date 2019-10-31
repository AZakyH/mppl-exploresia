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
//     return view('index');
// });

/* Navbar Menu */
Route::get('/', 'HomeController@index')->name('index');
Route::get('discover', 'HomeController@discover')->name('discover');
Route::get('blogs', 'HomeController@blogs')->name('blogs');
Route::get('about', 'HomeController@aboutus')->name('aboutus');
Route::get('login_page', 'Auth\LoginController@login_page')->name('login_page');

// Harusnya ntar bisa pas login
Route::get('plan', 'HomeController@plan_now')->name('plan_now');


