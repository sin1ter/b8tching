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
Route::get('/customer_info',[AdminController::class, 'show']);
Route::get('/add_product',[AdminController::class, 'product']);
Route::post('/add_product',[AdminController::class, 'add_product']);
Route::get('/show_product',[AdminController::class, 'show_product']);

Route::get('/customer',[CustomerController::class, 'index']);
Route::post('/customer',[CustomerController::class, 'store']);

