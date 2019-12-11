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

Route::group(['middleware' => 'auth'],function (){
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

# DepartingController
    Route::get('departing', ['as' => 'departing.index','uses' => 'Backend\DepartingController@index']);
    Route::get('departing/datatables', ['as' => 'departing.datatables', 'uses' => 'Backend\DepartingController@dataTables']);
    Route::get('departing/show/{id}', ['as' => 'departing.show', 'uses' => 'Backend\DepartingController@show']);
    Route::get('departing/create', ['as' => 'departing.create', 'uses' => 'Backend\DepartingController@create']);
    Route::post('departing/create', ['as' => 'departing.store', 'uses' => 'Backend\DepartingController@store']);
    Route::get('departing/edit/{id}', ['as' => 'departing.edit', 'uses' => 'Backend\DepartingController@edit']);
    Route::put('departing/update/{id}', ['as' => 'departing.update', 'uses' => 'Backend\DepartingController@update']);
    Route::get('departing/delete/{id}', ['as' => 'departing.delete', 'uses' => 'Backend\DepartingController@destroy']);
    Route::resource('departing','Backend\DepartingController');

    # DepartingController
    Route::get('destination', ['as' => 'destination.index','uses' => 'Backend\DestinationController@index']);
    Route::get('destination/datatables', ['as' => 'destination.datatables', 'uses' => 'Backend\DestinationController@dataTables']);
    Route::get('destination/show/{id}', ['as' => 'destination.show', 'uses' => 'Backend\DestinationController@show']);
    Route::get('destination/create', ['as' => 'destination.create', 'uses' => 'Backend\DestinationController@create']);
    Route::post('destination/create', ['as' => 'destination.store', 'uses' => 'Backend\DestinationController@store']);
    Route::get('destination/edit/{id}', ['as' => 'destination.edit', 'uses' => 'Backend\DestinationController@edit']);
    Route::put('destination/update/{id}', ['as' => 'destination.update', 'uses' => 'Backend\DestinationController@update']);
    Route::get('destination/delete/{id}', ['as' => 'destination.delete', 'uses' => 'Backend\DestinationController@destroy']);
    Route::resource('destination','Backend\DestinationController');
});


Route::get('/order', 'Frontend\FrontController@index')->name('order');
Route::get('/seat', 'Frontend\FrontController@seat')->name('seat');
Route::get('/payment', 'Frontend\FrontController@payment')->name('payment');

