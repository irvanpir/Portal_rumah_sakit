<?php
// tambahan controller
use App\Http\Controllers\KontakController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\VisimisiController;
// end tambahan controller
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home.index');
// tambahan route
Route::resource('kontak', KontakController::class);
Route::resource('informasi', InformasiController::class);
Route::resource('pendaftaran', PendaftaranController::class);
Route::resource('sambutan', SambutanController::class);
Route::resource('visimisi', VisimisiController::class);
// end tambahan route