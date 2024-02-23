<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::post('create/service' , [ServiceController::class , 'store'])->name('create.service');
Route::get('detail/service/{service}' , [ServiceController::class , 'show'])->name('detail.service');
