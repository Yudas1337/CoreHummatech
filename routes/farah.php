<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StructureController;


Route::post('product-company/store', [ProductController::class, 'storeCompany'])->name('productCompany.store');
Route::get('product-company/{product}/edit', [ProductController::class, 'editCompany'])->name('productCompany.edit');
Route::put('product-company/{product}/update', [ProductController::class, 'updateCompany'])->name('productCompany.update');

Route::post('testimonial/store', [TestimonialController::class, 'storeProduct'])->name('testimonialProduct.store');
Route::put('testimonial/product/{testimonial}', [TestimonialController::class, 'updateProduct'])->name('testimonialProduct.update');