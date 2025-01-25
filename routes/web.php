<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RtController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

// Route::get('/penduduk', function () {
//     return view('penduduk.index');
// });

Route::resource('penduduks', PendudukController::class);

// agamas
// Route::get('/agamas', [AgamaController::class, 'index'])->name('agamas.index');
// Route::get('/agamas/create', [AgamaController::class, 'create'])->name('agamas.create');
// Route::post('/agamas', [AgamaController::class, 'store'])->name('agamas.store');
// Route::get('/agamas/{id}/edit', [AgamaController::class, 'edit'])->name('agamas.edit');
// Route::put('/agamas/{id}', [AgamaController::class, 'update'])->name('agamas.update');
// Route::delete('/agamas/{id}', [AgamaController::class, 'destroy'])->name('agamas.destroy');
Route::resource('agamas', AgamaController::class);

Route::resource('dusuns', DusunController::class);

Route::resource('rts', RtController::class);

Route::resource('products', ProductController::class);

// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::put('/products/{id}', [ProductController::class, 'show'])->name('products.show');
// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
