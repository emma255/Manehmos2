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

Route::get('index', function () {
    return view('index');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('child/register', function () {
    return view('registration.child_register');
});

Route::get('maternal/register', function () {
    return view('registration.maternal_register');
});

Route::get('husband/register', function () {
    return view('registration.husband_register');
});

Route::get('postnatal', function () {
    return view('registers.postnatal');
});

Route::get('infant', function () {
    return view('registers.infant_progress');
});

Route::get('register6', function () {
    return view('registers.register6');
});

Route::get('register7', function () {
    return view('registers.register7');
});

Route::get('register13', function () {
    return view('registers.register13');
});

Route::get('admin/home', function () {
    return view('admin.adminHome');
});

//posts
Route::post('maternal/store', 'RegisterMaternalController@store');

Route::post('postnatal/store', 'PostnatalController@store');