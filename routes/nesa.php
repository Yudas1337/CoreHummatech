<?php

use App\Http\Controllers\SosialMediaController;
use Illuminate\Support\Facades\Route;

Route::get('social-media' , [SosialMediaController::class ,'index']);
Route::post('create/social/media/' , [SosialMediaController::class , 'store'])->name('create.social.media');
Route::delete('delete/social/media/{sosialMedia}' ,[SosialMediaController::class ,'destroy'])->name('delete.social.media');
Route::put('update/social/media/{sosialMedia}' ,[SosialMediaController::class ,'update'])->name('update.social.media');
