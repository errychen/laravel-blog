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



//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/', 'HomeController@index')->name('home:index');


//Route::group(['middleware' => 'auth'], function () {
//    Route::get('/', 'HomeController@index')->name('home:index')->middleware('permission');
//    Route::get('/menu', 'MenuController@index')->name('menu:index')->middleware('permission');
//    Route::get('/menu/lists', 'MenuController@lists')->name('menu:lists')->middleware('permission');
//
//
//
//});





//Route::get('/', 'HomeController@index');
//Route::get('/menu', 'MenuController@index');



//Route::middleware('auth:web')
//->group(function () {
//    Route::get('/', 'HomeController@index');
//    Route::get('/menu', 'MenuController@index');
//});



// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');



// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');
