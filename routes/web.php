<?php

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

// Home route returning index.blade.php
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/ctf-sma-smk', function () {
    return view('ctfSmaSmk');
})->name('ctf.sma');

Route::get('/lkti-sma-smk', function () {
    return view('lktiSmaSmk');
})->name('lkti.sma');

Route::get('/ctf-mahasiswa', function () {
    return view('ctfMahasiswa');
})->name('ctf.mahasiswa');


