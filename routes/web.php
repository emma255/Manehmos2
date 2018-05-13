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

Route::get('index', 'HomeController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('child/register', 'RegisterChildController@create');

Route::get('maternal/register', 'RegisterMaternalController@create');

Route::get('postnatal', 'PostnatalController@create');

Route::get('infant', 'InfantController@create');

Route::get('register6', 'Register6Controller@create');

Route::get('register7', 'Register7Controller@create');

Route::get('register13', 'Register13Controller@create');

Route::get('admin/home', 'AdminHomeController@create');

//posts
Route::post('maternal/store', 'RegisterMaternalController@store');

Route::post('postnatal/store', 'PostnatalController@store');

Route::post('infant/store', 'InfantController@store');

Route::post('register6/store', 'Register6Controller@store');

Route::post('register7/store', 'Register7Controller@store');

Route::post('register13/store', 'Register13Controller@store');

Route::post('child/store', 'RegisterChildController@store');
