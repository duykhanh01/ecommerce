<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();



Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

    Route::prefix('option')->group(function () {
        Route::get('/',[App\Http\Controllers\Admin\ColorController::class, 'index'])->name('option');

        Route::POST('/addColor',[App\Http\Controllers\Admin\ColorController::class, 'store'])->name('addColor');
        Route::delete('/delColor/{id}',[App\Http\Controllers\Admin\ColorController::class, 'destroy'])->name('delColor');
        Route::PUT('/updateColor/{id}',[App\Http\Controllers\Admin\ColorController::class, 'update'])->name('updateColor');

        Route::POST('/addSize',[App\Http\Controllers\Admin\SizeController::class, 'store'])->name('addSize');
        Route::delete('/delSize/{id}',[App\Http\Controllers\Admin\SizeController::class, 'destroy'])->name('delSize');
        Route::PUT('/updateSize/{id}',[App\Http\Controllers\Admin\SizeController::class, 'update'])->name('updateSize');

        Route::POST('/addTag',[App\Http\Controllers\Admin\TagsController::class, 'store'])->name('addTag');
        Route::delete('/delTag/{id}',[App\Http\Controllers\Admin\TagsController::class, 'destroy'])->name('delTag');
        Route::PUT('/updateTag/{id}',[App\Http\Controllers\Admin\TagsController::class, 'update'])->name('updateTag');

        Route::POST('/addCategory',[App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('addCategory');
        Route::delete('/delCategory/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('delCategory');
        Route::PUT('/updateCategory/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('updateCategory');

    });

    Route::prefix('product')->group(function () {
        Route::get('/',[App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product');
        Route::POST('/addProduct',[App\Http\Controllers\Admin\ProductController::class, 'store'])->name('addProduct');        
    });

    
});
Route::prefix('home')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
    Route::get('/product-detail/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('product-detail');

});