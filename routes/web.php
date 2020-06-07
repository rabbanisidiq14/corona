<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/artikel','HomeController@artikel');
Route::get('/artikel/lihat/{id}','HomeController@artikel');

Route::get('/user/register','UserController@showRegisterView')->name('register');
Route::post('/user/register/kirim','UserController@insertDataUser');

Route::get('/user/login','UserController@showLoginView')->name('login');
Route::post('user/login/check','UserController@checkLogin');

Route::get('/user/logout','UserController@doLogout')->name('logout');

Route::get('/user/profile','UserController@showProfile');
Route::get('/user',function(){return redirect(route('home'));});

Route::get('/artikel/buat','ArtikelController@showViewForm');
Route::any('/artikel/buat/kirim','ArtikelController@submitTambah');

Route::get('/artikel/daftar','ArtikelController@daftarArtikel');

Route::get('/artikel/edit',function(){return redirect(url('/artikel/daftar'));});
Route::get('/artikel/edit/{id}','ArtikelController@showViewEdit');
Route::post('/artikel/edit/{id}/kirim','ArtikelController@submitEdit');

Route::get('/artikel/delete/{id}','ArtikelController@submitDelete');