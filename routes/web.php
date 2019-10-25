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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('home', 'HomeController@index')->name('home');

# UserController
    Route::get('user', ['as' => 'user.index', 'uses' => 'Backend\UserController@index']);
    Route::get('user/datatables', ['as' => 'user.datatables', 'uses' => 'Backend\UserController@dataTables']);
    Route::get('user/show/{id}', ['as' => 'user.show', 'uses' => 'Backend\UserController@show']);
    Route::get('user/create', ['as' => 'user.create', 'uses' => 'Backend\UserController@create']);
    Route::post('user/create', ['as' => 'user.store', 'uses' => 'Backend\UserController@store']);
    Route::get('user/edit/{id}', ['as' => 'user.edit', 'uses' => 'Backend\UserController@edit']);
    Route::put('user/update/{id}', ['as' => 'user.update', 'uses' => 'Backend\UserController@update']);
    Route::get('user/delete/{id}', ['as' => 'user.delete', 'uses' => 'Backend\UserController@destroy']);
    Route::resource('user', 'Backend\UserController');

# RecordController
    Route::get('record', ['as' => 'record.index', 'uses' => 'Backend\RecordController@index']);
    Route::get('record/datatables', ['as' => 'record.datatables', 'uses' => 'Backend\RecordController@dataTables']);
    Route::get('record/show/{id}', ['as' => 'record.show', 'uses' => 'Backend\RecordController@show']);
    Route::get('record/create', ['as' => 'record.create', 'uses' => 'Backend\RecordController@create']);
    Route::post('record/create', ['as' => 'record.store', 'uses' => 'Backend\RecordController@store']);
    Route::get('record/edit/{id}', ['as' => 'record.edit', 'uses' => 'Backend\RecordController@edit']);
    Route::put('record/update/{id}', ['as' => 'record.update', 'uses' => 'Backend\RecordController@update']);
    Route::get('record/delete/{id}', ['as' => 'record.delete', 'uses' => 'Backend\RecordController@destroy']);
    Route::resource('record', 'Backend\RecordController');
});