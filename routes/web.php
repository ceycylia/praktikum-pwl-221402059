<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaControllerr;
use App\Http\Controllers\admincontroller;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/daftar_mahasiswa','App\Http\Controllers\MahasiswaControllerr@index');

// Route::get('/daftar_mahasiswa', [MahasiswaControllerr::class,'index']);
// Route::get('/daftar_mahasiswa', [MahasiswaControllerr::class,'index']);

// // Route::post('/detail_mahasiswa', [MahasiswaControllerr::class, 'detail_mhs']);

// //Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaControllerr::class, 'detail_mhs']);
 
// Route::view('/detail_mahasiswa', 'detail_mahasiswa');

Route::get('/admin/dasboard', [admincontroller::class, 'index']);

Route::get('/admin/postingan', [admincontroller::class, 'show_postingan']);

Route::get('/admin/arsip', [admincontroller::class, 'show_arsip']);

Route::get('/admin/data', [admincontroller::class, 'show_data']);

Route::get('/admin/produk', [admincontroller::class, 'show_produk']);

Route::get('/admin/kontak', [admincontroller::class, 'show_kontak']);