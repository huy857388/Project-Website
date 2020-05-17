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

// Client
Route::get('/','HomeController@index');
route::get('/single/{id}','HomeController@single')->name('single');
route::get('/Top-rating','HomeController@topRating')->name('TopRating');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login',function(){
	return view('auth.login');
})->name('login');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

route::get('/danhmuc',function(){
	return view('pages.DanhMuc');
});

// Admin