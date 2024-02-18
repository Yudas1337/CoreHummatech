<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return view('admin.pages.news.index');
});

Route::get('/news/create', function () {
    return view('admin.pages.news.create');
});

Route::get('/category', function () {
    return view('admin.pages.category.index');
});

Route::get('/collab', function () {
    return view('admin.pages.collab.index');
});

Route::get('/gallery', function () {
    return view('admin.pages.gallery.index');
});

Route::get('/testimonial', function () {
    return view('admin.pages.testimonial.index');
});

Route::get('/branch', function () {
    return view('admin.pages.branch.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
