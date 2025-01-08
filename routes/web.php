<?php

use App\Http\Controllers\AgamasController;
use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

// Route::get('/penduduk', function () {
//     return view('penduduk.index');
// });

Route::resource('penduduks', PendudukController::class);

// agamas
// Route::get('/agamas', [AgamasController::class, 'index'])->name('agamas.index');
// Route::get('/agamas/create', [AgamasController::class, 'create'])->name('agamas.create');
// Route::post('/agamas', [AgamasController::class, 'store'])->name('agamas.store');
// Route::get('/agamas/{id}/edit', [AgamasController::class, 'edit'])->name('agamas.edit');
// Route::put('/agamas/{id}', [AgamasController::class, 'update'])->name('agamas.update');
// Route::delete('/agamas/{id}', [AgamasController::class, 'destroy'])->name('agamas.destroy');
Route::resource('agamas', AgamasController::class);
