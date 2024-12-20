<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtributController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\SpesifikasiPrintController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\LampiranController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\LaporanController;
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

Auth::routes();
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login'); // Rute untuk menampilkan halaman login


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/pelanggan', [PelangganController::class, 'index'])->name('admin.pelanggan.index');
    Route::post('/admin/pelanggan', [PelangganController::class, 'store'])->name('admin.pelanggan.store');
    Route::post('/admin/pelanggan/update', [PelangganController::class, 'update'])->name('admin.pelanggan.update');
    Route::delete('/admin/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('admin.pelanggan.destroy');
    Route::get('/admin/pelanggan/search-ajax', [PelangganController::class, 'searchAjax'])->name('admin.pelanggan.searchAjax');
    Route::get('/admin/pelanggan/filterAjax', [PelangganController::class, 'filterAjax'])->name('admin.pelanggan.filterAjax');
    // master produk
    Route::get('/admin/data-master', [ProductController::class, 'index']);
    Route::post('/admin/master', [ProductController::class, 'store'])->name('admin.master.store');
    Route::get('/admin/master', [ProductController::class, 'create'])->name('admin.master.index');
    Route::delete('/admin/master/{id}', [ProductController::class, 'destroy'])->name('admin.master.destroy');
    // Pemesanan
    Route::get('/admin/detail-pemesanan/{id}', [PemesananController::class, 'show']);
    Route::get('/admin/progress/{id}', [PemesananController::class, 'progress']);
    Route::get('/admin/laporan', [LaporanController::class, 'index']);
    Route::post('/upload/progress/{id}', [UploadController::class, 'uploadProgress'])->name('upload.progress');

    Route::get('/admin/master-pemesanan', [PemesananController::class, 'index']);
    Route::post('/admin/master-pemesanan', [PemesananController::class, 'store']);
    Route::delete('/admin/master-pemesanan/{id}', [PemesananController::class, 'destroy']);

    Route::resource('lampiran', LampiranController::class)->names('lampiran');
    // Attribute dan Print
    Route::post('/add-subattributes', [AjaxController::class, 'store'])->name('add-subattributes');
    Route::resource('atribute', AtributController::class);
    Route::resource('print', SpesifikasiPrintController::class);
    Route::get('/find-pelanggan/{id}', [PelangganController::class, 'find']);
});





Route::get('/specifications/create', [SpecificationController::class, 'create'])->name('specifications.create');
Route::get('/specifications/store', [SpecificationController::class, 'store'])->name('specifications.store');
