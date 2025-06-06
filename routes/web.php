<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndustryController;

// Frontend Routes
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
Route::get('blog', [BlogController::class, 'posts']);
Route::get('post/{title}', [BlogController::class, 'post'])->name('post');
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

Route::get('products/{name}',[ProductController::class,'product']);
Route::get('/category/{name}', [ProductController::class, 'category']);
Route::get('/categories/all', function(){
    return view('frontend.pages.allproductcategory');
});

Route::get('ceo-message', function () {
    return view('frontend.pages.promoter-message');
});
Route::get('research-and-development', function () {
    return view('frontend.pages.randd');
});
Route::get('faq', function () {
    return view('frontend.pages.faq');
});

Route::get('industry/{slug}',[IndustryController::class,'industry'])->name('industry');

// Authentication Routes
Auth::routes();

// Admin Routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Blog Routes
    Route::resource('blogs', BlogController::class);

    // Product Routes
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::delete('/products/image/{id}', [ProductController::class, 'deleteImage'])->name('products.deleteImage');

    // Industry Routes
    Route::get('/industries', [IndustryController::class, 'index'])->name('industries.index');
    Route::get('/industries/create', [IndustryController::class, 'create'])->name('industries.create');
    Route::post('/industries', [IndustryController::class, 'store'])->name('industries.store');
    Route::get('/industries/{id}/edit', [IndustryController::class, 'edit'])->name('industries.edit');
    Route::put('/industries/{id}', [IndustryController::class, 'update'])->name('industries.update');
    Route::delete('/industries/{id}', [IndustryController::class, 'destroy'])->name('industries.destroy');
});
