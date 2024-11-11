<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/assignments', function () {
    return view('assignments');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/location', function () {
    return view('location');
});
Route::get('/mpls', function () {
    return view('mpls');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/hello', function () {
    return view('helloHtml.home');
});

Route::get('/style', function () {
    return view('style.home');
});

Route::get('/responsive1', function () {
    return view('responsive1.home');
});

Route::get('/form', function () {
    return view('form.home');
});

Route::get('/ourTestimoni', function () {
    return view('ourTestimoni.home');
});

Route::get('/linktree', function () {
    return view('linktree.home');
});
