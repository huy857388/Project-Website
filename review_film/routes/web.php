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
    return view('views.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login',function(){
	return view('auth.login');
})->name('login');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
route::get('/singel',function(){
	return view('pages.singel');

});
route::get('/danhmuc',function(){
	return view('pages.DanhMuc');
});
route::get('/Top-rating',function(){
	return view('pages.toprating');
});