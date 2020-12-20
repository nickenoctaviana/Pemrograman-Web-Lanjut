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

Route::get('/', function () {
    return view('welcome');
});
//tugas BESAR
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sepatu', 'HomeController@sepatu')->name('sepatu');
Route::get('/baju', 'HomeController@baju')->name('baju');
Route::get('/tas', 'HomeController@tas')->name('tas');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/createbarang', 'AdminController@create')->name('createbarang');
Route::post('/simpan', 'AdminController@store')->name('simpan');
Route::get('/edit/{id}', 'AdminController@edit')->name('edit');
Route::post('/update/{id}', 'AdminController@update')->name('update');
Route::get('/delete/{id}', 'AdminController@destroy')->name('delete');