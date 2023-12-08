<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tugas1',function (){
    return view('tugas1');
})->name('tugas1');

Route::get('tugas2',function (){
    return view('tugas2');
})->name('tugas2');

Route::get('week1',function (){
    return view('week1');
})->name('week1');

Route::get('week2',function (){
    return view('week2');
})->name('week2');

Route::get('week4',function (){
    return view('week4');
})->name('week4');

Route::get('week6',function (){
    return view('week6');
})->name('week6');

Route::get('week7',function (){
    return view('week7');
})->name('week7');

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata')->name('biodata');
Route::get('showJam/{jam}', 'App\Http\Controllers\DosenController@showJam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaiKuliahController@tambahnilai');
Route::post('/nilaikuliah/storenilai','App\Http\Controllers\NilaiKuliahController@storenilai');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');
