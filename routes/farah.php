<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::resource('testimonial', TestimonialController::class);

Route::get('produk', function () {
        return view('landing.product');
});

Route::get('layanan', function () {
    return view('landing.service.service-detail');
});

Route::get('layanan/pelatihan', function () {
    return view('landing.service.training-detail');
});

Route::get('/about-us', [AboutUsController::class, 'index']);
