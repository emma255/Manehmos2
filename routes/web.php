<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('homepage', 'HomeController@home')->middleware('clinician');
Route::resource('Admin', 'AdminHomeController');
Route::resource('AdminTasks', 'TasksController');
Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('child/register', 'RegisterChildController@create')->middleware('auth');
Route::get('maternal/register', 'RegisterMaternalController@create')->middleware('auth');
Route::get('showUsers', 'AdminHomeController@users')->middleware('auth');
Route::get('showTasks', 'TasksController@show')->middleware('auth');
Route::get('postnatal', 'PostnatalController@create')->middleware('auth');
Route::get('infant', 'InfantController@create')->middleware('auth');
Route::get('register6', 'Register6Controller@create')->middleware('auth');
Route::get('register7', 'Register7Controller@create')->middleware('auth');
Route::get('register13', 'Register13Controller@create')->middleware('auth');
Route::get('admin/home', 'AdminHomeController@index')->middleware('auth');
Route::get('task/create', 'TasksController@create')->middleware('auth');
Route::get('progress', 'ProgressController@index2')->middleware('auth')->middleware(['doctor']);
Route::get('progress2', 'ProgressController@index1')->middleware('auth')->middleware(['clinician']);
Route::get('request/progress', 'ProgressController@showChart')->middleware('auth');
Route::get('registrationForm', 'RegistrationFormController@create')->middleware('guest');
Route::get('user/profile', 'AdminHomeController@userProfile')->middleware('auth');
// start reports routes
Route::get('pdf', 'PDFController@index')->middleware('auth');
Route::get('pdf/export', 'PDFController@export')->middleware('auth');
Route::post('report/request', 'ReportsController@testcase')->middleware('auth');
Route::get('reportHome', 'ReportsController@index')->middleware('auth');
Route::get('mtoto/print', 'ReportsController@mtotoPrint')->middleware('auth');
Route::get('IVDactivities/print', 'ReportsController@IVDactivitiesPrint')->middleware('auth');
Route::get('antenatal/print', 'ReportsController@antenatalPrint')->middleware('auth');
Route::get('reports/postnatal', 'ReportsController@postnatal')->name('postnatalReport')->middleware('auth');
Route::get('reports/IVD_activities', 'ReportsController@ivd_activities')->name('ivd')->middleware('auth');
Route::get('reports/ufuatiliaji_mtoto', 'ReportsController@ufuatiliaji_mtoto')->name('ufuatiliaji_mtoto')->middleware('auth');
Route::get('reports/antenatal', 'ReportsController@antenatal')->name('antenatal')->middleware('auth');
// end reports routes

//posts
Route::post('send/details', 'RegistrationFormController@send')->middleware('guest');
Route::post('maternal/store', 'RegisterMaternalController@store')->middleware('auth');
Route::post('postnatal/store', 'PostnatalController@store')->middleware('auth');
Route::post('infant/store', 'InfantController@store')->middleware('auth');
Route::post('register6/store', 'Register6Controller@store')->middleware('auth');
Route::post('register7/store', 'Register7Controller@store')->middleware('auth');
Route::post('register13/store', 'Register13Controller@store')->middleware('auth');
Route::post('child/store', 'RegisterChildController@store')->middleware('auth');
Route::post('task/store', 'TasksController@store')->middleware('auth');
Route::post('postnatal/print', 'ReportsController@postnatalPrint')->middleware('auth');
