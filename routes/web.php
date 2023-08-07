<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Product;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

// Admin Route

Route::get('login/admin',[AdminController::class, 'adminlogin']);
Route::post('login/admin',[AdminController::class, 'adminlogincheck']);
Route::get('/admin',[AdminController::class, 'index']);
Route::post('/admin',[AdminController::class, 'store']);

Route::group(['middleware'=> 'admin'],function(){
    
    Route::get('/admin_show', [AdminController::class, 'admin_info']);
    Route::get('/admin_show/delete/{id}',[AdminController::class, 'admindelete']);
    Route::get('/customer_info',[AdminController::class, 'show']);
    Route::get('/add_product',[AdminController::class, 'product']);
    Route::post('/add_product',[AdminController::class, 'add_product']);
    Route::get('/show_product',[AdminController::class, 'show_product']);
    Route::get('/show_product/delete/{id}',[AdminController::class, 'delete']);
    Route::get('/show_product/edit/{id}',[AdminController::class, 'edit']) -> name('show_product.edit');
    Route::post('/show_product/update/{id}',[AdminController::class, 'update']);
    Route::get('/admin_profile/{id}', [AdminController::class, 'admin_profile_show']);
    Route::get('/edit/{id}',[AdminController::class, 'admin_profile_edit']) -> name('admin_profile.edit');
    Route::post('/admin_profile/update/{id}',[AdminController::class, 'admin_profile_update']);
    Route::get('admin/dashboard', [AdminController::class,'adminDashboard']);
    Route::get('admin/logout', [AdminController:: class, 'adminlogout'])->name('admin.logout');
}); 

//Customer Route
Route::get('/customer',[CustomerController::class, 'index']);
Route::post('/customer',[CustomerController::class, 'store']);
Route::view('/shop','customer.home');
Route::view('/customer_shop','customer.shop');
Route::get('/', [CustomerController::class, 'product']);
Route::get('/shop',[CustomerController::class, 'product']);
Route::view('/single_product','customer.single_product');
Route::get('/single_product/{id}',[CustomerController::class,'s_product']);
Route::get('/customer_profile/{id}', [CustomerController::class, 'customer_profile_show']);
Route::get('/cusedit/{id}',[CustomerController::class, 'customer_profile_edit']) -> name('customer_profile.edit');
Route::post('/customer_profile/update/{id}',[CustomerController::class, 'customer_profile_update']);
Route::post('/add_to_cart', [CustomerController::class, 'add_to_cart']);



Route::get('login/customer',[CustomerController::class, 'customerlogin']);
Route::post('login/customer',[CustomerController::class, 'customerlogincheck']);
Route::post('/add_to_cart', [CustomerController::class, 'add_to_cart']);




Route::group(['middleware'=> 'customers'],function(){
    Route::view('/single_product','customer.single_product');
    Route::get('/single_product/{id}',[CustomerController::class,'s_product']);
    Route::get('/customer_profile/{id}', [CustomerController::class, 'customer_profile_show']);
    Route::get('/cusedit/{id}',[CustomerController::class, 'customer_profile_edit']) -> name('customer_profile.edit');
    Route::post('/customer_profile/update/{id}',[CustomerController::class, 'customer_profile_update']);
    Route::get('/shop_login',[CustomerController::class, 'login_product']);
    Route::get('customer/logout', [CustomerController:: class, 'customerlogout'])->name('customer.logout');
    Route::post('/add_to_cart', [CustomerController::class, 'add_to_cart']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');