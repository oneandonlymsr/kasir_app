<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('tampilan.home');

Route::get('/detail', function () {
    return view('detail_produk');
})->name('tampilan.detail');

Route::get('/kontak', function () {
    return view('kontak');
})->name('tampilan.kontak');
