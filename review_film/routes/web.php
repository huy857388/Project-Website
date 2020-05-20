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

// <<<<<<< HEAD
// =======
route::get('/danh-muc/{id}','HomeController@danhmuc')->name('danhmuc'); // Huy
// Mục tin tức Ajax và API => Huy

// >>>>>>> 7e7198d5fd9f50dade39ae6705ed8a7ea6eb5386
Route::get('/home','HomeController@index')->name('home'); // Huy và Phát
Route::get('/','HomeController@index'); // Huy và Phát

route::get('the-loai/{theloai_url}/{news_url}','HomeController@single')->name('showInfo'); // Phát
route::get('the-loai/{theloai_url}','HomeController@theLoai')->name('theLoai'); // Phát
route::get('/top-comment','HomeController@topComment')->name('topComment'); //Phát
route::post('/comment','HomeController@postComment')->name('comment')->middleware('auth'); //Phát
Auth::routes(); //Phát
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
// bai viet
Route::get('/them_baiviet','NewsProduct@them_baiviet'); //Khanh
Route::get('/edit_baiviet/{id_baiviet}','NewsProduct@edit_baiviet');//Khanh
Route::get('/xoa_baiviet/{id_baiviet}','NewsProduct@xoa_baiviet');//Khanh
Route::get('/danhsach_baiviet','NewsProduct@danhsach_baiviet'); //Khanh
Route::post('/update_baiviet/{id_baiviet}','NewsProduct@update_baiviet');//Khanh
Route::post('/save_baiviet','NewsProduct@save_baiviet'); //Khanh
// >>>>>>> 9b85fe5447345d6ec862198bb72b73d08133b047
// 