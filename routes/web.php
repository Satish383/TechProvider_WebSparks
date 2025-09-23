<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/service', function () {
    return view('frontend.service');
});

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});