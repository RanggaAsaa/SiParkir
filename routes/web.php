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

Route::get('/Beranda', function () {
    return view('admin.beranda');
});

Route::get('/template-admin', function () {
    return view('admin.template');
});

Route::get('/Kendaraan-Masuk', function () {
    return view('admin.KendaraanMasuk.data');
});
Route::get('/Kendaraan-Keluar', function () {
    return view('admin.KendaraanKeluar.data');
});
Route::get('/Informasi-Parkir', function () {
    return view('admin.InformasiParkir.data');
});