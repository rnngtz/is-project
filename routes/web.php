<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//DASHBOARD ROUTES
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

//CATEGORY ROUTES
Route::get('category', function () {
    return view('admin.category');
});

//PRODUCTS ROUTES
Route::resource('products', ProductsController::class);
Route::put('/products/{product}', [ProductsController::class, 'update'])->name('products.update');



require __DIR__.'/auth.php';
