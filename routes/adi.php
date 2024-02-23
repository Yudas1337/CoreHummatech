<?php
use Illuminate\Support\Facades\Route;


Route::post('image-uploader', \App\Http\Controllers\ImageUploader::class)->name('image-uploader');
