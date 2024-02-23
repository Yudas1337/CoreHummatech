<?php

use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::post('create/service' , [ServiceController::class , 'store'])->name('create.service');
Route::get('detail/service/{service}' , [ServiceController::class , 'show'])->name('detail.service');
Route::get('hero-section' , [SectionController::class , 'index'])->name('hero.section');
Route::get('hero-section/create' , [SectionController::class , 'create']);
Route::post('create/section' , [SectionController::class ,'store'])->name('create.section');

