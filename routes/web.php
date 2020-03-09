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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard','Admin\DashboardController@getDashboard')->name('dashboard');
Route::get('/register','AuthController@getRegister')->name('register');
Route::post('/register','AuthController@postRegister');
Route::get('/login','AuthController@getLogin')->name('login');
Route::post('/login','AuthController@postLogin');
Route::get('/logout','AuthController@logout')->name('logout');

Route::resource('siswa', 'Admin\SiswaController');
Route::resource('karyawan','Admin\KaryawanController');
Route::resource('kelas', 'Admin\KelasController');
Route::resource('kompetensi','Admin\KompetensiController');
Route::resource('akses', 'Admin\AksesController');
Route::resource('tahun_ajaran','Admin\Tahun_AjaranController');
// Route::get('/home', function(){
// 	return view('layout.main');
// })->name('home');
 
// Route::get('/relasi','RelasiController@getUser')->name('data_karyawan');