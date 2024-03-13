<?php

use App\Http\Controllers\Api\TestimonialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    Route::get('testimonial', [TestimonialController::class, 'index']);
    Route::post('testimonial', [TestimonialController::class, 'store']);
    Route::post('testimonial-product', [TestimonialController::class, 'storeProduct']);
    Route::put('testimonial/{testimonial}', [TestimonialController::class, 'update']);
    Route::put('testimonial-product/{testimonial}', [TestimonialController::class, 'updateProduct']);
    Route::delete('testimonial', [TestimonialController::class, 'destroy']);
});
