<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Users;
use App\Http\Controllers\ProdusenController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\AuthController;


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
    return view('login');
});

Route::post('/', [AuthController::class, 'login'])->name('login');



Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/users', [Users::class, 'index']);

// Produsen

Route::get('/produsen', [ProdusenController::class, 'index']);
Route::post('/produsen', [ProdusenController::class, 'store'])->name('produsen.store');
Route::put('/produsen/{id}', [ProdusenController::class, 'edit'])->name('produsen.update');
Route::delete('/produsen/{id}', [ProdusenController::class, 'destroy'])->name('produsen.destroy');

// Distributor
Route::get('/distributor', [DistributorController::class, 'index']);
Route::post('/distributor', [DistributorController::class, 'store'])->name('distributor.store');
Route::put('/distributor/{id}', [DistributorController::class, 'edit'])->name('distributor.update');
Route::delete('/distributor/{id}', [DistributorController::class, 'destroy'])->name('distributor.destroy');

// Kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::put('/kategori/{id}', [KategoriController::class, 'edit'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

// Produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::put('/produk/{id}', [ProdukController::class, 'edit'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

// Toko
Route::get('/toko', [TokoController::class, 'index']);
Route::post('/toko', [TokoController::class, 'store'])->name('toko.store');
Route::put('/toko/{id}', [TokoController::class, 'edit'])->name('toko.update');
Route::delete('/toko/{id}', [TokoController::class, 'destroy'])->name('toko.destroy');

// Pengiriman
Route::get('/pengiriman', [PengirimanController::class, 'index']);
Route::post('/pengiriman', [PengirimanController::class, 'store'])->name('pengiriman.store');
Route::put('/pengiriman/{id}', [PengirimanController::class, 'edit'])->name('pengiriman.update');
Route::delete('/pengiriman/{id}', [PengirimanController::class, 'destroy'])->name('pengiriman.destroy');





