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

Route::get('/','HomeController@index');
route::get('/single','HomeController@single');

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
route::get('/Top-rating',function(){
	return view('pages.toprating');
});
//	frontEnd


//	backEnd
Route::get('/admin','adminController@index');
Route::get('/dashboard','adminController@showDashboard');
Route::post('/adminDashboard','adminController@dashboard');
Route::get('/logOut','adminController@logOut');