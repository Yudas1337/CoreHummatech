<?php

use App\Http\Controllers\EnterpriseStructureController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::post('image-uploader', \App\Http\Controllers\ImageUploader::class)->name('image-uploader');

// News
Route::resource('news' , NewsController::class);

// Company
Route::resource('setting/company' , EnterpriseStructureController::class);
