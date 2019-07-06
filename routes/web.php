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
    return view('');
});

Route::group(['prefix' => 'admin/user', 'namespace' => 'Admin'], function() {

	Route::get('list', 'TestController@danhsach')->name('list');

	Route::get('add', 'TestController@add');
	Route::post('add', 'TestController@actionAdd')->name('actionAdd');

	Route::get('edit/{id}', 'TestController@edit');
	Route::post('edit', 'TestController@actionEdit')->name('actionEdit');

	Route::delete('delete/{id}', 'TestController@destroy')->name('delete');

	Route::post('ajax', 'TestController@ajax')->name('ajax');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
