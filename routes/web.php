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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

// Admin routes
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
//    Route::get('login', 'LoginController@index');
//    Route::post('login', 'LoginController@login')->name('admin.login');
//
//    Route::group(['middleware' => 'admin'], function() {
//        Route::get('/', 'DashboardController@index')->name('admin.dashboard');
//    });
//});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::group(['middleware' => 'admin'], function() {
        Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
        Route::resource('/post', 'PostController');
    });
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');
