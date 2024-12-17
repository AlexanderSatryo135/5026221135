<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KertashvsController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\KaryawanController;


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

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);

Route::post('/pegawai/store', [PegawaiController::class, 'store']);

Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);

Route::post('/pegawai/update', [PegawaiController::class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

Route::get('/input', [MalasngodingController::class, 'input']);

Route::post('/proses', [MalasngodingController::class, 'proses']);

Route::resource('/kertashvs', KertashvsController::class);

Route::get('/pagecounter', [PageCounterController::class, 'index']);

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');

Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');

Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');

Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
