<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BackgroundController;
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


Route::get('background', [BackgroundController::class, 'index'])->name('background.index');
Route::post('background/store', [BackgroundController::class, 'store'])->name('background.store');
Route::put('background/update/{background}', [BackgroundController::class, 'update'])->name('background.update');
Route::delete('background/delete/{background}', [BackgroundController::class, 'destroy'])->name('background.destroy');

