<?php

use App\Http\Controllers\ForceController;
use App\Http\Controllers\ProcedureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisionAndMisionController;
//faq
//terms
// vision & mision
Route::post('create/vision/mision/' , [VisionAndMisionController::class , 'store'])->name('create.vision.mision');
Route::put('update/vision/mision/{visionAndMision}' ,[VisionAndMisionController::class ,'update'])->name('update.vision.mision');
Route::put('update/mision/mision/{misionItems}' ,[VisionAndMisionController::class ,'updatemision'])->name('update.mision.mision');
Route::delete('delete/vision/mision/{visionAndMision}', [VisionAndMisionController::class, 'destroy'])->name('destroy.vision.mision');
Route::delete('delete/mision/mision/{misionItems}', [VisionAndMisionController::class, 'destroymision'])->name('destroy.mision.mision');
//procedure
//Force
