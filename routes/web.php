<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Product;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin',[AdminController::class, 'index']);
Route::post('/admin',[AdminController::class, 'store']);
Route::view('/login', 'login');
Route::get('/customer_info',[AdminController::class, 'show']);
Route::get('/add_product',[AdminController::class, 'product']);
Route::post('/add_product',[AdminController::class, 'add_product']);
Route::get('/show_product',[AdminController::class, 'show_product']);
Route::get('/show_product/delete/{id}',[AdminController::class, 'delete']);
Route::get('/show_product/edit/{id}',[AdminController::class, 'edit']) -> name('show_product.edit');
Route::post('/show_product/update/{id}',[AdminController::class, 'update']);



Route::get('/customer',[CustomerController::class, 'index']);
Route::post('/customer',[CustomerController::class, 'store']);

