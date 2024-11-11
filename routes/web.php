<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
