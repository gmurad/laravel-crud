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

Route::controller(ProductController::class)->name('product.')->prefix('products')->group(function(){
    // TODO have to change route names to plural
    Route::get('/', 'index')->name('index'); // get a list of products
    Route::post('/', 'store')->name('store'); // create product
    Route::get('/{product}/edit', 'edit')->name('edit'); // product editing page
    Route::post('/{product}', 'update')->name('update'); // save the edited product
    Route::delete('/{product}', 'destroy')->name('destroy'); // delete product
});

Route::get('categories', [CategoryController::class, 'index'])->name('category.index'); // get a list of categories
Route::post('categories', [CategoryController::class, 'store'])->name('category.store'); // create category
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit'); // category editing page
Route::post('/categories/{category}', [CategoryController::class, 'update'])->name('category.update'); // save the edited category

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show.category_with_products'); //get one category with nested products (получение одной категории c вложенными товарами)
Route::get('/categories/{category}/products', [CategoryController::class, 'show'])->name('category.show.mix'); // (получение списка товаров из категории; получение списка товаров из категории и всех вложенных в неё категорий одним списком)
