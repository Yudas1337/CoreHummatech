<?php
use Illuminate\Support\Facades\Route;

Route::resource('faq', 'App\Http\Controllers\FaqController');
Route::get('faq/search', 'App\Http\Controllers\FaqController@search')->name('faq.search');
