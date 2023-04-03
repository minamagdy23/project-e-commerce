<?php

use App\Http\Controllers\Dashbourd\ProductController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('website.index');
})->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('user',function(){
    return view('website.user');
})->name('userwelcome');