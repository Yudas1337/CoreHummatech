<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StructureController;


Route::post('product-company/store', [ProductController::class, 'storeCompany'])->name('productCompany.store');
Route::post('product-company/update/{product-company}', [ProductController::class, 'updateCompany'])->name('productCompany.update');