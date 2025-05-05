<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);
Route::resource('supplier',SupplierController::class);
Route::resource('stock',StockController::class);

