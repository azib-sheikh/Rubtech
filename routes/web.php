<?php

use Illuminate\Support\Facades\Route;

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
