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

Route::get('/', 'Frontend\PenyakitController@index')->name('dashboard');


Route::get('/home', 'Frontend\PenyakitController@index')->name('home');

Route::get('/detail/{data}', 'Frontend\PenyakitController@detail')->name('detail');

Route::get('/home/cari', 'Frontend\PenyakitController@cari')->name('cari');

Auth::routes(['verify' => true]);

