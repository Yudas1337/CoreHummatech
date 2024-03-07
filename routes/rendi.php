<?php

use App\Http\Controllers\ForceController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProcedureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisionAndMisionController;
//faq
//terms
//procedure
//Force

Route::get('/setting/philosophy', [LogoController::class, 'index'])->name('philosophy');
Route::post('/setting/philosophy/store', [LogoController::class, 'store'])->name('philosophy.store');
Route::put('/setting/philosophy/update/{logo}', [LogoController::class, 'update'])->name('philosophy.update');
