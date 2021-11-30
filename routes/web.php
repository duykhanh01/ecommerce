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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('admin/option',[App\Http\Controllers\Admin\ColorController::class, 'index'])->name('option');
Route::POST('admin/option/addColor',[App\Http\Controllers\Admin\ColorController::class, 'store'])->name('addColor');
Route::POST('admin/option/addSize',[App\Http\Controllers\Admin\SizeController::class, 'store'])->name('addSize');
