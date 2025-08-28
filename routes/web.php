<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.main');
});

Route::get('/dashboard-content', function () {
    return view('layouts.home'); // Asumsi 'home.blade.php' hanya berisi section 'isi_konten'
});

Route::resource('suppliers', App\Http\Controllers\SuppliersController::class);
Route::resource('barangs', App\Http\Controllers\barangsController::class);
Route::resource('transaksis', App\Http\Controllers\transaksisController::class);
Route::resource('karyawans', App\Http\Controllers\karyawansController::class);
Route::resource('bahanbakus', App\Http\Controllers\bahanbakusController::class);