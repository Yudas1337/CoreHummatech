<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', fn () => view('welcome'));

Route::get('/news', fn () => view('admin.pages.news.index'));

Route::get('/news/create', fn () => view('admin.pages.news.create'));

Route::get('/news/edit', fn () => view('admin.pages.news.edit'));

Route::get('/news/show', fn () => view('admin.pages.news.show'));

Route::get('/category-news', fn () => view('admin.pages.news-category.index'));

Route::get('/collab', fn () => view('admin.pages.collab.index'));

Route::get('/category-collab', fn () => view('admin.pages.collab-category.index'));

Route::get('/gallery', fn () => view('admin.pages.gallery.index'));

Route::get('/testimonial', fn () => view('admin.pages.testimonial.index'));

Route::get('/category-testimonial', fn () => view('admin.pages.testimonial-category.index'));

Route::get('/branch', fn () => view('admin.pages.branch.index'));

Route::get('/hero-section', fn () => view('admin.pages.hero-section.index'));

Route::get('/hero-section/create', fn () => view('admin.pages.hero-section.create'));

Route::get('/hero-section/edit', fn () => view('admin.pages.hero-section.edit'));

Route::get('/product', fn () => view('admin.pages.products.index'));

Route::get('/product/detail', fn () => view('admin.pages.products.detail'));

Route::get('/terms-condition', fn () => view('admin.pages.terms-condition.index'));

Route::get('/terms-condition/edit', fn () => view('admin.pages.terms-condition.edit'));

Route::get('/social-media', fn () => view('admin.pages.social-media.index'));

Route::get('/service', fn () => view('admin.pages.service.index'));

Route::get('/service/detail', fn () => view('admin.pages.service.detail'));

Route::get('/message-approval', function () {
    return view('admin.pages.message-approval.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
