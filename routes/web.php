<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryNewsController;
use App\Http\Controllers\CollabCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CollabMitraController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ForceController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesPackageController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\TermsconditionController;
use App\Http\Controllers\VisionAndMisionController;
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
Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('landing.index');
});
Route::get('contact', function () {
    return view('landing.contact');
})->name('contact');

Route::get('message-approval', function () {
    return view('admin.pages.message-approval.index');
});
Route::get('branch' , [BranchController::class ,'index']);
Route::resource('force', ForceController::class);
Route::get('social-media' , [SosialMediaController::class ,'index']);
Route::resource('procedure', ProcedureController::class);
Route::resource('faq', FaqController::class);
Route::resource('terms_condition', TermsconditionController::class);
Route::get('vision-mision' , [VisionAndMisionController::class ,'index'])->name('vision.mision');
Route::get('hero-section', [SectionController::class , 'index'])->name('hero.section');
Route::get('berita', [NewsController::class, 'news']);
Route::get('/about-us', [AboutUsController::class, 'index']);
Route::get('{slugService}', [ServiceController::class, 'ShowService']);
Route::get('{slugnews}', [NewsController::class, 'showNews'])->name('news.slug');

Route::get('/gallery', function () {
    return view('admin.pages.gallery.index');
})->name('gallery.index');

Route::get('/testimonial', function () {
    return view('admin.pages.testimonial.index');
});

Route::get('/category-testimonial', function () {
    return view('admin.pages.testimonial-category.index');
});

Route::get('/hero-section/edit', function () {
    return view('admin.pages.hero-section.edit');
});


Route::get('/setting/terms-condition/edit', function () {
    return view('admin.pages.terms-condition.edit');
});

Route::get('/setting/faq', function () {
    return view('admin.pages.faq.index');
});


// Route::get('setting/profile', function() {
//     return view('admin.pages.setting.profile.index');
// });

// Route::get('/setting/vision-mision/create', function () {
//     return view('admin.pages.vision-mision.add');
// });
// Route::get('/setting/vision-mision/edit', function () {
//     return view('admin.pages.vision-mision.edit');
// });



// category news berita
Route::get('category-news' , [CategoryNewsController::class , 'index']);
Route::post('create/category/news' , [CategoryNewsController::class , 'store'])->name('create.category.news');
Route::delete('delete/category/news/{categoryNews}' ,[CategoryNewsController::class ,'destroy'])->name('delete.category.news');
Route::put('update/category/news/{categoryNews}' ,[CategoryNewsController::class ,'update'])->name('update.category.news');
// end category news berita

// news
// end news

// branch
Route::post('branch/create' ,[BranchController::class ,'store']);
Route::put('branch/update/{branch}' , [BranchController::class ,'update']);
Route::delete('brach/delete/{branch}' , [BranchController::class ,'destroy']);
// end branch

//category mitra
Route::post('create/category/mitra' , [CollabCategoryController::class , 'store'])->name('create.category.mitra');
Route::get('category-collab' , [CollabCategoryController::class ,'index']);
Route::put('update/category/mitra/{collabCategory}' ,[CollabCategoryController::class ,'update'])->name('update.category.mitra');
Route::delete('delete/category/mitra/{collabCategory}' ,[CollabCategoryController::class ,'destroy'])->name('delete.category.mitra');
// end category mitra

Route::resource('sale', SaleController::class);
Route::resource('service', ServiceController::class);
Route::resource('sale', SaleController::class);

//mitra
Route::get('collab' , [CollabMitraController::class ,'index']);
Route::delete('delete/collab/mitra/{collabMitra}' ,[CollabMitraController::class ,'destroy'])->name('delete.collab.mitra');
Route::post('create/collab/mitra' , [CollabMitraController::class , 'store'])->name('create.collab.mitra');
Route::put('update/collab/mitra/{collabMitra}' ,[CollabMitraController::class ,'update'])->name('update.collab.mitra');

//product
Route::resource('product', ProductController::class);
Route::delete('product/feature/{ProductFeature}' ,[ProductController::class ,'feature'])->name('product.feature');

Route::resource('sales-package', SalesPackageController::class);

require_once __DIR__ . '/kader.php';
require_once __DIR__ . '/farah.php';
require_once __DIR__ . '/nesa.php';
require_once __DIR__ . '/adi.php';
require_once __DIR__ . '/rendi.php';
