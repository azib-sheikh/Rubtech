<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('about', function () {
    return view('frontend.pages.about');
});
Route::get('industries-we-serve', function () {
    return view('frontend.pages.industry');
});
Route::get('contact', function () {
    return view('frontend.pages.contact');
});
Route::get('blog', function () {
    return view('frontend.pages.blog');
});
Route::get('products', function () {
    return view('frontend.pages.products');
});
Route::get('certificate-awards', function () {
    return view('frontend.pages.certificates');
});
Route::get('image-gallery', function () {
    return view('frontend.pages.image-gallery');
});
Route::get('video-gallery', function () {
    return view('frontend.pages.video-gallery');
});
Route::get('single', function () {
    return view('frontend.pages.single');
});
Route::get('single-product', function () {
    return view('frontend.pages.single-product');
});
Route::get('single-industry', function () {
    return view('frontend.pages.single-industry');
});
Route::get('ceo-message', function () {
    return view('frontend.pages.promoter-message');
});
Route::get('research-and-development', function () {
    return view('frontend.pages.randd');
});
Route::get('know-us-more', function () {
    return view('frontend.pages.know-us');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('blogs', BlogController::class);
    Route::prefix('admin/products')->group(
        function () {
            Route::get('/', [ProductController::class, 'index'])->name('product.index');
            Route::get('/create', [ProductController::class, 'create'])->name('product.create');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.create');
        }
    );
});
