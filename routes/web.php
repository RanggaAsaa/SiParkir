<?php

use App\Http\Controllers\InformasiparkirController;
use App\Http\Controllers\BerandauserController;
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

Route::get('/BerandanyaUser', function () {
    return view('user.halamanawal');
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
Route::controller(InformasiparkirController::class)->group(function () {
    Route::get('/admin/InformasiParkir', 'index');
    Route::post('/admin/InformasiParkir/form-tambah', 'create');
    Route::post('admin/InformasiParkir/tambah', 'store');
    Route::post('/admin/InformasiParkir/detail', 'edit');
    Route::post('/admin/InformasiParkir/ubah/{id}', 'update');
    Route::post('/admin/InformasiParkir/hapus', 'destroy');
});


Route::controller(BerandauserController::class)->group(function () {
    Route::get('/Beranda-user', 'index'); 
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
