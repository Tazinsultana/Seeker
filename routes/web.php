<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();



Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

});


Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'AdminHome'])->name('adminhome');
    Route::get('/admin/dashboard', [AdminController::class, 'AdminPannel'])->name('admindashboard');

    Route::controller(ProductController::class)->group(function () {
        Route::get('product', 'Index')->name('product');
        Route::post('add-product', 'AddProduct')->name('add.product');
    });

});