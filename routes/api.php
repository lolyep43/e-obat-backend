<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StockObatController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\TransaksiController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("AmbilSeluruhDataObat", [StockObatController::class,"SeluruhData"]);
Route::get("AmbilSeluruhDataSupply", [SupplyController::class,"SeluruhData"]);
Route::get("AmbilSeluruhDataTransaksi", [TransaksiController::class, "SeluruhData"]);

Route::get("AmbilDataObat/{id}", [StockObatController::class, "SpesifikData"]);
Route::get("AmbilDataSupply/{id}", [SupplyController::class, "SpesifikData"]);
Route::get("AmbilDataTransaksi/{id}", [TransaksiController::class, "SpesifikData"]);

Route::post("TambahDataTransaksi", [TransaksiController::class, "IsiData"]);
Route::post("TambahDataSupply", [SupplyController::class, "IsiData"]);
Route::post("TambahDataObat", [StockObatController::class, "IsiData"]);
Route::post("TambahDataSpesifikTransaksi", [TransaksiController::class, "IsiDataSpesifik"]);
Route::post("TambahDataSpesifikSupply", [SupplyController::class, "IsiDataSpesifik"]);

Route::post("HapusTransaksi", [TransaksiController::class, "HapusTransaksi"]);
Route::post("HapusSupply", [SupplyController::class, "HapusSupply"]);
Route::post("HapusObat", [StockObatController::class, "HapusObat"]);
