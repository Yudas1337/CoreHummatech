<?php
use Illuminate\Support\Facades\Route;

Route::resource('faq', 'App\Http\Controllers\FaqController');
Route::resource('terms_condition', 'App\Http\Controllers\TermsconditionController');
