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

Route::get('/data', 'HomeController@data');

// duong dan login
// ->middleware('auth')  ->middleware('check')



Route::prefix('page')->group(function () {
	Route::get('/', [
		'as' => 'trangchu', /*Đặt tên cho route*/
		'uses' => 'PageController@index', /*Đường dẫn cho route*/
	]);
	Route::get('/list', [
		'as' => 'list',
		'uses' => 'PageController@list',
	]);
	Route::get('product/{id}', [
		'as' => 'sanpham',
		'uses' => 'PageController@show',
	]);
	Route::get('/search', [ 'as' => 'timkiem', 'uses' => 'PageController@Search' ]);
	Route::get('addcart', [ 'as' => 'addCart', 'uses' => 'PageController@AddCart' ]);
	Route::get('showcart', [ 'as' => 'showCart', 'uses' => 'PageController@ShowCart' ]);

	// Login
	Route::get('login', 'LoginController@login')->name('login');
	Route::get('logout', 'LoginController@logout')->name('logout');

	Route::post('load', 'LoginController@load')->name('load');
	Route::post('register', 'LoginController@register')->name('register');
	// Endlogin

	Route::prefix('admin')->group(function () {
		// Table Product
		Route::get('createProduct', 'AdminController@CreateProduct');
		Route::post('addProduct', [
			'as' => 'addProduct',
			'uses' => 'AdminController@AddProduct',
		]);
		Route::get('editProduct/{id}', 'AdminController@EditProduct');
		Route::post('updateProduct/{id}', [
			'as' => 'updateProduct',
			'uses' => 'AdminController@UpdateProduct',
		]);
		Route::delete('deleteProduct/{id}', 'AdminController@DeleteProduct');
	});

	
});
