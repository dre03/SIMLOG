<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\PengirimanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes Kategori
Route::get('kategori', [KategoriController::class, 'index']);
Route::post('kategori', [KategoriController::class, 'store']);
Route::get('kategori/{id}', [KategoriController::class, 'show']);
Route::put('kategori/{id}', [KategoriController::class, 'update']);
Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);

// Routes Toko
Route::get('toko', [TokoController::class, 'index']);
Route::post('toko', [TokoController::class, 'store']);
Route::get('toko/{id}', [TokoController::class, 'show']);
Route::put('toko/{id}', [TokoController::class, 'update']);
Route::delete('toko/{id}', [TokoController::class, 'destroy']);

// Routes Pengiriman
Route::get('pengiriman', [PengirimanConctroller::class, 'index']);
Route::post('pengiriman', [PengirimanConctroller::class, 'store']);
Route::get('pengiriman/{id}', [PengirimanConctroller::class, 'show']);
Route::put('pengiriman/{id}', [PengirimanConctroller::class, 'update']);
Route::delete('pengiriman/{id}', [PengirimanConctroller::class, 'destroy']);
