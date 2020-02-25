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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/rrf', 'RequestController@rrf')->name('rrf');
Route::get('/srf-ict', 'RequestController@srf_ict')->name('srf-ict');
Route::get('/srf-vhc', 'RequestController@srf_vhc')->name('srf-vhc');
Route::get('/wfe-pm', 'RequestController@wfe_pm')->name('wfe-pm');
Route::get('/wfe-lab', 'RequestController@wfe_lab')->name('wfe-lab');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/request', 'HomeController@request')->name('request');
Route::get('/about', 'HomeController@about')->name('about');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');


