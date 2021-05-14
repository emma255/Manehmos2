<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('homepage', 'HomeController@index')->name('home');
Route::get('registrationForm', 'RegistrationFormController@create')->middleware('guest');
Route::post('send/details', 'RegistrationFormController@send')->middleware('guest');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    #User accounts
    Route::get('accounts/users/list', 'UsersController@index')->name('users.list');
    Route::get('accounts/users/create', 'UsersController@create')->name('users.create');
    Route::post('accounts/users/store', 'UsersController@store')->name('users.store');
    Route::get('accounts/users/edit/{user}', 'UsersController@edit')->name('users.edit');
    Route::post('accounts/users/update/{user}', 'UsersController@update')->name('users.update');
    Route::post('accounts/users/delete/{user}', 'UsersController@destroy')->name('users.delete');
    # Tasks
    Route::get('tasks/list', 'TasksController@index')->name('tasks.list');
    Route::get('tasks/create', 'TasksController@create')->name('tasks.create');
    Route::post('tasks/store', 'TasksController@store')->name('tasks.store');
    Route::get('tasks/edit', 'TasksController@edit')->name('tasks.edit');
    Route::post('tasks/update', 'TasksController@update')->name('tasks.update');
    Route::get('tasks/show', 'TasksController@show')->name('tasks.show');
    Route::post('tasks/delete', 'TasksController@destroy')->name('tasks.delete');
    #
    Route::get('maternals', 'RegisterMaternalController@index')->name('maternals');
    Route::get('maternal/register', 'RegisterMaternalController@create')->name('maternal.add');
    Route::post('maternal/store', 'RegisterMaternalController@store')->name('maternal.store');

    Route::post('child/delete', 'RegisterChildController@delete');
    Route::get('child/register', 'RegisterChildController@create')->name('child.add');
    Route::post('child/store', 'RegisterChildController@store')->name('child.store');
    Route::get('child/infants', 'RegisterChildController@index')->name('infants');
    Route::get('child/infant', 'InfantController@create')->name('infant.add');


    Route::get('postnatal', 'PostnatalController@create');
    Route::get('register6/{maternal?}', 'Register6Controller@create')->name('register6');
    Route::post('register6/store/{maternal?}', 'Register6Controller@store')->name('register6.store');
    Route::get('register7', 'Register7Controller@create');
    Route::get('register13', 'Register13Controller@create');
    Route::get('admin/home', 'AdminHomeController@index');
    Route::get('task/create', 'TasksController@create');
    Route::get('request/progress', 'ProgressController@showChart');
    Route::get('user/profile', 'AdminHomeController@userProfile');
    // start reports routes
    Route::get('pdf', 'PDFController@index');
    Route::get('pdf/export', 'PDFController@export');
    Route::post('report/request', 'ReportsController@testcase');
    Route::get('reportHome', 'ReportsController@index');
    Route::get('mtoto/print', 'ReportsController@mtotoPrint');
    Route::get('IVDactivities/print', 'ReportsController@IVDactivitiesPrint');
    Route::get('antenatal/print', 'ReportsController@antenatalPrint');
    Route::get('reports/postnatal', 'ReportsController@postnatal')->name('postnatalReport');
    Route::get('reports/IVD_activities', 'ReportsController@ivd_activities')->name('ivd');
    Route::get('reports/ufuatiliaji_mtoto', 'ReportsController@ufuatiliaji_mtoto')->name('ufuatiliaji_mtoto');
    Route::get('reports/antenatal', 'ReportsController@antenatal')->name('antenatal');
    // end reports routes

    //posts
    Route::post('postnatal/store', 'PostnatalController@store');
    Route::post('infant/store', 'InfantController@store');
    Route::post('register7/store', 'Register7Controller@store');
    Route::post('register13/store', 'Register13Controller@store');
    Route::post('task/store', 'TasksController@store');
    Route::post('postnatal/print', 'ReportsController@postnatalPrint');
    Route::get('progress', 'ProgressController@index2')->middleware(['doctor']);
    Route::get('progress2', 'ProgressController@index1')->middleware(['clinician']);
});
