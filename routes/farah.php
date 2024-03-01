<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::resource('testimonial', TestimonialController::class);

Route::prefix('produk')->group(function () {
    Route::get('', function () {
        return view('landing.product');
    });
    Route::get('milink', function () {
        return view('landing.product.milink');
    });
});

Route::prefix('layanan')->group(function () {
    Route::get('software-development', function () {
        return view('landing.layanan.software-development');
    });
});