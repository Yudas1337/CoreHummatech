<?php

use App\Http\Controllers\SosialMediaController;
use Illuminate\Support\Facades\Route;

Route::get('social-media' , [SosialMediaController::class ,'index']);
Route::post('create/social/media/' , [SosialMediaController::class , 'store'])->name('create.social.media');
Route::delete('delete/social/media/{sosialMedia}' ,[SosialMediaController::class ,'destroy'])->name('delete.social.media');


//social media
// Route::get('/social-media' , [SosialMediaController::class ,'index']);
// Route::delete('delete/social.media/{SosialMedia}' ,[SosialMediaController::class ,'destroy'])->name('delete.social.media');
// Route::post('create/social.media' , [SosialMediaController::class , 'store'])->name('create.social.media');
