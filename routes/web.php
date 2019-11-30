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

/* Login dan Logout */
Route::post('login', 'Auth\LoginController@authenticate')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

/* Register */
Route::get('register_page', 'Auth\RegisterController@register_page')->name('register_page');
Route::post('register', 'Auth\RegisterController@create')->name('register');

/* Halaman awal user */
Route::get('home', 'UserController@show')->name('home');

/* Halaman Planning */
Route::get('plan', 'HomeController@plan_now')->name('plan_now');

//* User *//
Route::group(['middleware' => 'App\Http\Middleware\UserMiddleware'], function()
{
    
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
