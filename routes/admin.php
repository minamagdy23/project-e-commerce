<?php

use App\Http\Controllers\Dashbourd\CategoryController;
use App\Http\Controllers\Dashbourd\EditCategoryController;
use App\Http\Controllers\Dashbourd\IndexController;
use App\Http\Controllers\Dashbourd\OrderController;
use App\Http\Controllers\Dashbourd\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/index',[IndexController::class,'index'])->name('admin');
Route::group(['as' => 'dashboard'], function(){
    Route::resource('categories', CategoryController::class);


});


Route::get('show_data',[EditCategoryController::class,'index'])->name('edit');
Route::post('Add_category',[EditCategoryController::class, 'create'])->name('insert.category');
Route::get('show_data',[EditCategoryController::class, 'store'])->name('edit');
Route::get('Edit/Category/{id}',[EditCategoryController::class, 'edit'])->name('Edit.Category');
Route::post('update/Category/{id}',[EditCategoryController::class, 'update'])->name('update.Category');
Route::get('Delete/Category/{id}',[EditCategoryController::class, 'destroy'])->name('destroy.category');
Route::get('Delete/Category/{id}',[ProductController::class,'destroy'])->name('destroy.product');
Route::post('update/Category/{id}',[EditCategoryController::class, 'update'])->name('update.Category');

Route::get('AddProduct',[ProductController::class, 'index'])->name('add_product');
Route::get('AddProduct',[ProductController::class, 'store'])->name('add_product');
Route::get('p_index',[ProductController::class, 'index'])->name('p_index');
Route::get('show',[ProductController::class, 'show'])->name('show_data');
Route::get('show',[ProductController::class, 'data'])->name('show_data');
Route::post('insert/product',[ProductController::class, 'create'])->name('insert.product');
Route::get('edit/product/{id}',[ProductController::class, 'edit'])->name('edit.product');
Route::post('update/product/{id}',[ProductController::class, 'update'])->name('update.product');


Route::get('order',[OrderController::class, 'index'])->name('add_order');
// Route::resource('category',EditCategoryController::class);