<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ShoppingController;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/shopping', [ShoppingController::class, 'index'])->name('shopping.index'); // 商品一覧
    Route::get('/shopping/cart', [ShoppingController::class, 'cart'])->name('shopping.cart'); //
    Route::post('/shopping/purchase', [ShoppingController::class, 'purchase'])->name('shopping.purchase'); // 
    Route::get('/shopping/{commodity}', [ShoppingController::class, 'show'])->name('shopping.show'); // 商品詳細
});

require __DIR__.'/auth.php';