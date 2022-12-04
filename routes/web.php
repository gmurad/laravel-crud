<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('product.index'); // get a list of products
//Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store'); // create product
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit'); // product editing page
Route::post('/products/{product}', [ProductController::class, 'update'])->name('product.update'); // save the edited product
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('product.destroy'); // delete product


//Route::resource('/products', ProductController::class);

Route::get('categories', [CategoryController::class, 'index'])->name('category.index'); // get a list of categories
Route::post('categories', [CategoryController::class, 'store'])->name('category.store'); // create category
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit'); // category editing page
Route::post('/categories/{category}', [CategoryController::class, 'update'])->name('category.update'); // save the edited category
//Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.destroy'); // delete category
//Route::resource('/categories', CategoryController::class);