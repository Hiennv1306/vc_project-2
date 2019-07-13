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

// Route::get('/admin', function () {
//     return view('');
// });
Route::group(['middleware' => 'auth'], function () {
	Route::group(['prefix' => 'admin'], function() {
		Route::group(['prefix' => 'user'], function() {
			Route::get('list', ['as' => 'getList', 'uses' => 'Admin\TestController@danhsach'])->name('home');
			Route::get('add', ['as' => 'getUserAdd', 'uses' => 'Admin\TestController@add']);
			Route::post('add', 'Admin\TestController@actionAdd')->name('actionAdd');

			Route::get('edit/{id}', 'Admin\TestController@edit');
			Route::post('edit', 'Admin\TestController@actionEdit')->name('actionEdit');

			Route::delete('delete/{id}', 'Admin\TestController@destroy')->name('delete');
			Route::post('ajax', 'Admin\TestController@ajax')->name('ajax');
			Route::post('search', 'Admin\TestController@search')->name('search');


			Route::get('search', ['as' => 'Search', 'uses' => 'Admin\TestController@search'])->name('search');
			
			
		});


		Route::get('import', 'Admin\TestController@import');

	});
});

// Route::get('admin', '\App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


