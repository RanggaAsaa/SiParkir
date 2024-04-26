<?php

use App\Http\Controllers\InformasiparkirController;
use App\Http\Controllers\KendaraanmasukController;
use App\Http\Controllers\KendaraankeluarController;
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



//Route Informasi Parkir//
Route::controller(InformasiparkirController::class)->group(function () {
    Route::get('/admin/InformasiParkir', 'index');
    Route::post('admin/InformasiParkir/tambah', 'store');
    Route::post('/admin/InformasiParkir/detail', 'edit');
    Route::post('/admin/InformasiParkir/ubah/{id}', 'update');
    Route::get('/admin/InformasiParkir/hapus{id}', 'destroy');
});


//Route Kendaraan Masuk//
Route::controller(KendaraanmasukController::class)->group(function () {
    Route::get('/admin/Kendaraan-Masuk', 'index');
    Route::post('admin/Kendaraan-Masuk/tambah', 'store');   
    Route::post('/admin/Kendaraan-Masuk/detail', 'edit');
    Route::post('/admin/Kendaraan-Masuk/ubah/{id}', 'update');
    Route::get('/admin/Kendaraan-Masuk/hapus/{id}', 'destroy');
});

//Route Kendaraan Keluar//
Route::controller(KendaraankeluarController::class)->group(function () {
    Route::get('/admin/Kendaraan-Keluar', 'index');
    Route::post('admin/Kendaraan-Keluar/tambah', 'store');
    Route::post('/admin/Kendaraan-Keluar/detail', 'edit');
    Route::post('/admin/Kendaraan-Keluar/ubah/{id}', 'update');
    Route::post('/admin/Kendaraan-Keluar/hapus', 'destroy');
});


//Route User//
Route::controller(BerandauserController::class)->group(function () {
    Route::get('/Beranda-user', 'index'); 
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
