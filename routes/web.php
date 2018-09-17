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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','UserController@profile');
Route::get('/edit-profile','UserController@editprofile');


//remember to prefix all the routes and add middleware
Route::get('/admin/home','AdminController@index')->middleware('admin');
Route::get('/admin/reg-managers','AdminController@managers');
Route::get('/admin/managers-form','AdminController@managersform');
Route::post('/admin/managers-form/post','AdminController@addManager');
