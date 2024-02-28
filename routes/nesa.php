<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\VisionAndMisionController;
use Illuminate\Support\Facades\Route;

//social media
Route::get('social-media' , [SosialMediaController::class ,'index']);
Route::post('create/social/media/' , [SosialMediaController::class , 'store'])->name('create.social.media');
Route::delete('delete/social/media/{sosialMedia}' ,[SosialMediaController::class ,'destroy'])->name('delete.social.media');
Route::put('update/social/media/{sosialMedia}' ,[SosialMediaController::class ,'update'])->name('update.social.media');

// vision & mision
Route::get('vision-mision' , [VisionAndMisionController::class ,'index']);
Route::post('create/vision/mision/' , [VisionAndMisionController::class , 'store'])->name('create.vision.mision');

//profile
Route::get('setting/profile', [ProfileController::class, 'index']);
Route::post('store/profile' , [ProfileController::class, 'store'])->name('store.profile');
Route::put('update/profile/{profile}' ,[ProfileController::class ,'update'])->name('update.profile');

// Route::post('/store/profile', 'ProfileController@storeOrUpdate')->name('store.profile');
// Route::put('/update/profile/{id}', 'ProfileController@storeOrUpdate')->name('update.profile');
