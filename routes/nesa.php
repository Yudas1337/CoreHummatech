<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\VisionAndMisionController;
use Illuminate\Support\Facades\Route;

//social media
Route::post('create/social/media/' , [SosialMediaController::class , 'store'])->name('create.social.media');
Route::delete('delete/social/media/{sosialMedia}' ,[SosialMediaController::class ,'destroy'])->name('delete.social.media');
Route::put('update/social/media/{sosialMedia}' ,[SosialMediaController::class ,'update'])->name('update.social.media');

//profile
Route::get('setting/profile', [ProfileController::class, 'index']);
Route::post('store/profile' , [ProfileController::class, 'store'])->name('store.profile');
Route::put('update/profile/{profile}' ,[ProfileController::class ,'update'])->name('update.profile');

//alumni-detail
Route::get('alumni-detail', function (){
    return view('landing.service.alumni-detail');
});

Route::get('data/lowongan', function (){
    return view('landing.vacancy.index');
});

