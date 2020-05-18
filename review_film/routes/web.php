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
Route::get('/','HomeController@index'); // Huy và Phát
route::get('/single/{id}','HomeController@single')->name('single'); // Phát
route::get('/top-comment','HomeController@topComment')->name('topComment'); //Phát
route::get('/the-loai/{id}','HomeController@theLoai')->name('theLoai');
route::post('/comment','HomeController@postComment')->name('comment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); // Huy và Phát


Route::get('/login',function(){
	return view('auth.login');
})->name('login'); //Phát

Route::get('/auth/redirect/{provider}', 'SocialController@redirect'); //Phát
Route::get('/callback/{provider}', 'SocialController@callback'); //Phát


// <<<<<<< HEAD

// Admin
// =======
//	frontEnd


//	backEnd
Route::get('/admin','adminController@index'); //Danh
Route::get('/dashboard','adminController@showDashboard'); //Danh
Route::post('/adminDashboard','adminController@dashboard'); //Danh
Route::get('/logOut','adminController@logOut'); // Danh
// >>>>>>> 9b85fe5447345d6ec862198bb72b73d08133b047
