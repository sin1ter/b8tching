<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\Customer;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin',[AdminController::class, 'index']);
Route::post('/admin',[AdminController::class, 'store']);
Route::get('/customer',[CustomerController::class, 'index']);
Route::post('/customer',[CustomerController::class, 'store']);
Route::get('/customer_info',[AdminController::class, 'show']);