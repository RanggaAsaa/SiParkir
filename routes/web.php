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

Route::post('/template', function () {
    return view('template');
});

Route::get('/template-admin', function () {
    return view('admin.template');
});

Route::get('/Kendaraan-Masuk', function () {
    return view('admin.KendaraanMasuk.data');
});