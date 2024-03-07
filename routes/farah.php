<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StructureController;
use App\Models\CategoryProduct;

Route::get('/category-product', [CategoryProductController::class, 'index'])->name('category-product.index');
Route::post('/category-product/store', [CategoryProductController::class, 'store'])->name('category-product.store');
Route::put('/category-product/update/{categoryProduct}', [CategoryProductController::class, 'update'])->name('category-product.update');
Route::delete('/category-product/delete/{categoryProduct}', [CategoryProductController::class, 'destroy'])->name('category-product.destroy');