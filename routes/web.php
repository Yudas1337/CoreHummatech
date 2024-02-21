<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryNewsController;
use App\Http\Controllers\SaleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return view('admin.pages.news.index');
});

Route::get('/news/create', function () {
    return view('admin.pages.news.create');
});

Route::get('/news/edit', function () {
    return view('admin.pages.news.edit');
});

Route::get('/news/show', function () {
    return view('admin.pages.news.show');
});

Route::get('/collab', function () {
    return view('admin.pages.collab.index');
});

Route::get('/category-collab', function () {
    return view('admin.pages.collab-category.index');
});

Route::get('/gallery', function () {
    return view('admin.pages.gallery.index');
});

Route::get('/testimonial', function () {
    return view('admin.pages.testimonial.index');
});

Route::get('/category-testimonial', function () {
    return view('admin.pages.testimonial-category.index');
});

Route::get('/hero-section', function () {
    return view('admin.pages.hero-section.index');
});

Route::get('/hero-section/create', function () {
    return view('admin.pages.hero-section.create');
});

Route::get('/hero-section/edit', function () {
    return view('admin.pages.hero-section.edit');
});

Route::get('/product', function () {
    return view('admin.pages.products.index');
});

Route::get('/product/detail', function () {
    return view('admin.pages.products.detail');
});

Route::get('/terms-condition', function () {
    return view('admin.pages.terms-condition.index');
});

Route::get('/terms-condition/edit', function () {
    return view('admin.pages.terms-condition.edit');
});

Route::get('/social-media', function () {
    return view('admin.pages.social-media.index');
});

Route::get('/service', function () {
    return view('admin.pages.service.index');
});

Route::get('/faq', function () {
    return view('admin.pages.faq.index');
});

Route::get('/service/detail', function () {
    return view('admin.pages.service.detail');
});

Route::get('/message-approval', function () {
    return view('admin.pages.message-approval.index');
});

Route::get('setting/profile', function() {
    return view('admin.pages.setting.profile.index');
});

Route::get('/setting/vision-mision', function () {
    return view('admin.pages.vision-mision.index');
});

Route::get('/setting/vision-mision/create', function () {
    return view('admin.pages.vision-mision.add');
});
Route::get('/setting/vision-mision/edit', function () {
    return view('admin.pages.vision-mision.edit');
});

Route::get('/company', function() {
    return view('admin.pages.company.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// category news berita
Route::get('category-news' , [CategoryNewsController::class , 'index']);
Route::post('create/category/news' , [CategoryNewsController::class , 'store'])->name('create.category.news');
Route::delete('delete/category/news/{categoryNews}' ,[CategoryNewsController::class ,'destroy'])->name('delete.category.news');
Route::put('update/category/news/{categoryNews}' ,[CategoryNewsController::class ,'update'])->name('update.category.news');
// end category news berita

// branch
Route::get('branch' , [BranchController::class ,'index']);
Route::post('branch/create/' ,[BranchController::class ,'store']);
Route::delete('brach/delete/{branch}' , [BranchController::class ,'destroy']);
// end branch

Route::resource('sale', SaleController::class);