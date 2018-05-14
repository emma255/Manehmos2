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

Route::get('index', 'HomeController@index')->middleware('auth');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::get('child/register', 'RegisterChildController@create')->middleware('auth');

Route::get('maternal/register', 'RegisterMaternalController@create')->middleware('auth');

Route::get('postnatal', 'PostnatalController@create')->middleware('auth');

Route::get('infant', 'InfantController@create')->middleware('auth');

Route::get('register6', 'Register6Controller@create')->middleware('auth');

Route::get('register7', 'Register7Controller@create')->middleware('auth');

Route::get('register13', 'Register13Controller@create')->middleware('auth');

Route::get('admin/home', 'AdminHomeController@create')->middleware('auth');

//posts
Route::post('maternal/store', 'RegisterMaternalController@store')->middleware('auth');

Route::post('postnatal/store', 'PostnatalController@store')->middleware('auth');

Route::post('infant/store', 'InfantController@store')->middleware('auth');

Route::post('register6/store', 'Register6Controller@store')->middleware('auth');

Route::post('register7/store', 'Register7Controller@store')->middleware('auth');

Route::post('register13/store', 'Register13Controller@store')->middleware('auth');

Route::post('child/store', 'RegisterChildController@store')->middleware('auth');
