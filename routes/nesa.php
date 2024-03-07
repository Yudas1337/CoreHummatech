<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\VisionAndMisionController;
use App\Http\Controllers\WorkflowController;
use Illuminate\Support\Facades\Route;


Route::get('vacancy/workflow', [WorkflowController::class, 'index']);
Route::put('vacancy/workflow/update/{workflow}' ,[WorkflowController::class ,'update'])->name('update.workflow');
Route::post('store/workflow' , [WorkflowController::class, 'store'])->name('store.workflow');
Route::delete('vacancy/workflow/delete/{workflow}' ,[WorkflowController::class ,'destroy'])->name('delete.vacancy.workflow');
