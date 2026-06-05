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
});

// Dynamic route to support any requested .html page
Route::get('/{page}.html', function ($page) {
    if (view()->exists($page)) {
        return view($page);
    }
    abort(404);
});
