<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/penduduk', function () {
    return view('penduduk.index');
});
