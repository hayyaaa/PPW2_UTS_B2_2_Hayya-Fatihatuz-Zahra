<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);

Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::put('products/update/{id}', [ProductController::class, 'update'])->name('products.update');



// Route::get('/products/create', [PostController::class, 'create'])->name('posts.create');
// Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
// Route::post('/post', [PostController::class, 'store'])->name('posts.store');
// Route::get('/post/show/{id}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('post/update/{id}', [PostController::class, 'update'])->name('posts.update');
