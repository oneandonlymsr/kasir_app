<?php

use Illuminate\Support\Facades\Route;

Route::get('/detail', function () {
    return view('detail_produk');
});

Route::get('/', function () {
    return view('welcome');
});
