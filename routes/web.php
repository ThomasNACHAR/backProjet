<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

Route::get('/', [ProductController::class, 'home']);


Route::get('product/view', [ProductController::class, 'viewProduct']);
Route::get('product/create', [ProductController::class, 'viewCreateProduct']);
Route::post('product/create', [ProductController::class, 'createProduct']);
Route::get('product/update/{id}', [ProductController::class, 'viewUpdateForm']);
Route::put('update/{id}', [ProductController::class, 'updateProduct']);
Route::delete('delete/{id}', [ProductController::class, 'deleteProduct']);




// Route::get('', [ProfileController::class, 'updateProduct']);
// Route::get('', [ProfileController::class, 'destroyProduct']);

Route::get('/category/edit', [CategoryController::class, 'editCategory']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/create', [CategoryController::class, 'createCategory']);
Route::get('/category/update/{id}', [CategoryController::class, 'update']);
Route::post('/category/update/{id}', [CategoryController::class, 'updateCategory']);
Route::delete('/category/{id}', [CategoryController::class, 'destroyCategory']);

Route::get('/cart', [CartController::class, 'index']);


Route::get('/order/{id}', [OrderController::class, 'order']);
Route::post('/order/checkout', [OrderController::class, 'checkout']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
