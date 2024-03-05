<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeProductController;
use App\Http\Controllers\StructureController;

Route::resource('testimonial', TestimonialController::class);

Route::prefix('/produk')->group(function() {
    Route::get('/', [HomeProductController::class, 'index'])->name('produk-home');
    // Route::get('/{produk}', 'produk')->name('produk.detail');
});

Route::get('layanan', function () {
    return view('landing.service.service-detail');
});

Route::get('layanan/pelatihan', function () {
    return view('landing.service.training-detail');
});

Route::get('/about-us', [AboutUsController::class, 'index']);

Route::post('structure/create', [StructureController::class, 'store'])->name('structure.create');

Route::get('setting/structure', [StructureController::class, 'index'])->name('structure.index');