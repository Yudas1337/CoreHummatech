<?php

use App\Http\Controllers\EnterpriseStructureController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::post('image-uploader', \App\Http\Controllers\ImageUploader::class)->name('image-uploader');

// News
Route::resource('news' , NewsController::class);

// Company
// Route::resource('enterprise-structure' , EnterpriseStructureController::class);

Route::prefix('setting')->name('company.')->group(function() {
    Route::get('company', [\App\Http\Controllers\EnterpriseStructureController::class, 'index'])->name('index');
    Route::post('company/store', [\App\Http\Controllers\EnterpriseStructureController::class, 'store'])->name('store');
    Route::put('company/{enterpriseStructure}', [\App\Http\Controllers\EnterpriseStructureController::class, 'update'])->name('update');
    Route::delete('company/{enterpriseStructure}', [\App\Http\Controllers\EnterpriseStructureController::class, 'destroy'])->name('destroy');
});
