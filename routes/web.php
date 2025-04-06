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
