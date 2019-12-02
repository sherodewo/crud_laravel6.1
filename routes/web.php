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

Route::get('/home', 'HomeController@index')->name('home');


# UserController
Route::get('user', ['as' => 'user.index','uses' => 'Backend\UserController@index']);
Route::get('user/datatables', ['as' => 'user.datatables', 'uses' => 'Backend\UserController@dataTables']);
Route::get('user/show/{id}', ['as' => 'user.show', 'uses' => 'Backend\UserController@show']);
Route::get('user/create', ['as' => 'user.create', 'uses' => 'Backend\UserController@create']);
Route::post('user/create', ['as' => 'user.store', 'uses' => 'Backend\UserController@store']);
Route::get('user/edit/{id}', ['as' => 'user.edit', 'uses' => 'Backend\UserController@edit']);
Route::put('user/update/{id}', ['as' => 'user.update', 'uses' => 'Backend\UserController@update']);
Route::get('user/delete/{id}', ['as' => 'user.delete', 'uses' => 'Backend\UserController@destroy']);
Route::resource('user','Backend\UserController');

Route::resource('order','Frontend\OrderController');