<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VisionAndMisionController;
use Illuminate\Support\Facades\Route;


// news
Route::get('news/index' , [NewsController::class , 'index']);

Route::post('create/service' , [ServiceController::class , 'store'])->name('create.service');
Route::get('detail/service/{service}' , [ServiceController::class , 'show'])->name('detail.service');
Route::get('hero-section/create' , [SectionController::class , 'create']);
Route::post('create/section' , [SectionController::class ,'store'])->name('create.section');
Route::get('edit/section/{section}', [SectionController::class ,'edit'])->name('hero.edit');
Route::put('edit/section/{section}', [SectionController::class ,'update'])->name('hero.update');
Route::delete('delete/section/{section}', [SectionController::class ,'destroy'])->name('hero.delete');

// position
Route::get('setting/departement' , [PositionController::class , 'index'])->name('setting.departement');
Route::post('create/position' , [PositionController::class , 'store'])->name('create.position');
Route::put('update/position/{position}', [PositionController::class ,'update'])->name('update.position');
Route::delete('delete/position/{position}' , [PositionController::class , 'destroy'])->name('delete.position');


// team
Route::get('setting/teams' , [TeamController::class , 'index'])->name('setting.teams');
Route::post('create/team' , [TeamController::class , 'store'])->name('create.team');
Route::put('update/team/{team}', [TeamController::class ,'update'])->name('update.team');
Route::delete('delete/team/{team}' , [TeamController::class , 'destroy'])->name('delete.team');

Route::get('data/product', [\App\Http\Controllers\HomeProductController::class, 'index'])->name('product');

Route::get('detail/product', function () {
    return view('landing.product.product-detail');
});


// show pdf
Route::get('showpdf/{sale}' , [SaleController::class ,'showpdf']);

// layanan
