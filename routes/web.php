<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DekorController;

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
Route::get('FormGedung',[HomeController::class, 'FormGedung'])->name('FormGedung');
Route::get('viewgedung',[HomeController::class, 'viewgedung'])->name('viewgedung');
Route::get('hapusgedung{id}',[HomeController::class, 'hapusgedung'])->name('hapusgedung');
Route::post('simpanData',[HomeController::class, 'simpanData'])->name('simpanData');

Route::get('FormPembayaran',[PembayaranController::class, 'FormPembayaran'])->name('FormPembayaran');
Route::get('viewpembayaran',[PembayaranController::class, 'viewpembayaran'])->name('viewpembayaran');
Route::get('TampilanData',[PembayaranController::class, 'TampilanData'])->name('TampilanData');
Route::get('hapuspembayaran{id}',[PembayaranController::class, 'hapuspembayaran'])->name('hapuspembayaran');
Route::post('simpanPembayaran',[PembayaranController::class, 'simpanPembayaran'])->name('simpanPembayaran');

Route::get('DashboardGedung',[HomeController::class, 'DashboardGedung'])->name('DashboardGedung');

Route::post('gambar',[HomeController::class, 'gambar'])->name('gambar');

Route::get('FormDekor',[DekorController::class, 'FormDekor'])->name('FormDekor');
Route::get('viewdekor',[DekorController::class, 'viewdekor'])->name('viewdekor');
Route::get('hapusDekor{id}',[DekorController::class, 'hapusDekor'])->name('hapusDekor');
Route::post('simpanDekor',[DekorController::class, 'simpanDekor'])->name('simpanDekor');