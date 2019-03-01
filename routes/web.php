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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/data', 'HomeController@data');

Route::get('login', 'LoginController@login');

Route::get('logout', 'LoginController@logout');

Route::post('load', 'LoginController@load');

Route::post('register', 'LoginController@register');

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
	Route::login('login', [
		'as' => 'dangnhap',
		'uses' => 'PageController@login',
	]);
});