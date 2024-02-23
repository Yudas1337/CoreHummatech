<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get('service' , [ServiceController::class , 'index'])->name('service.index');
Route::post('create/service' , [ServiceController::class , 'store'])->name('create.service');
Route::put('update/service/{service}' , [ServiceController::class , 'update']);
Route::delete('delete/service/{service}' , [ServiceController::class , 'destroy']);