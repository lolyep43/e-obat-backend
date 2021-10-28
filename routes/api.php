<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("AmbilSeluruhDataObat", "App\Http\Controllers\StockObatController@SeluruhData");
Route::get("AmbilDataObat/{id}", "App\Http\Controllers\StockObatController@SpesifikData");
Route::get("AmbilSeluruhDataSupply", "App\Http\Controllers\SupplyController@SeluruhData");
Route::get("AmbilDataSupply/{id}", "App\Http\Controllers\SupplyController@SpesifikData");
Route::get("AmbilSeluruhDataTransaksi", "App\Http\Controllers\TransaksiController@SeluruhData");
Route::get("AmbilDataTransaksi/{id}", "App\Http\Controllers\TransaksiController@SpesifikData");