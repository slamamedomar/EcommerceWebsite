<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\GuestController::class, 'index']);

//shop
Route::get('/product-details/{id}', [App\Http\Controllers\GuestController::class, 'productDetails']);
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index']);
Route::get('/shop/category/{id}', [App\Http\Controllers\ShopController::class, 'shopByCat']);
Route::post('/product/search', [App\Http\Controllers\ShopController::class, 'searchP']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//client
Route::get('/client/dashboard', [App\Http\Controllers\ClientController::class, 'dashboard'])->middleware('auth');
Route::get('/client/profile', [App\Http\Controllers\ClientController::class, 'profile'])->middleware('auth');
Route::post('/client/profile/edit', [App\Http\Controllers\ClientController::class, 'updateprofile'])->middleware('auth');

Route::post('/client/com/add', [App\Http\Controllers\CommandeController::class, 'addCom'])->middleware('auth');
Route::get('/client/cart', [App\Http\Controllers\ClientController::class, 'cart'])->middleware('auth');



// admin
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->middleware('auth', 'admin');
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->middleware('auth', 'admin');
Route::post('/admin/profile/edit', [App\Http\Controllers\AdminController::class, 'updateprofile'])->middleware('auth', 'admin');

// categories routes
Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->middleware('auth', 'admin');
Route::post('/admin/categories/add', [App\Http\Controllers\CategoryController::class, 'AddCategory'])->middleware('auth', 'admin');
Route::post('/admin/categories/update', [App\Http\Controllers\CategoryController::class, 'update_cat'])->middleware('auth', 'admin');
Route::get('/admin/categories/{id}/delete', [App\Http\Controllers\CategoryController::class, 'delete_cat'])->middleware('auth', 'admin');

// products routes
Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->middleware('auth', 'admin');
Route::post('/admin/products/add', [App\Http\Controllers\ProductController::class, 'add'])->middleware('auth', 'admin');
Route::post('/admin/products/update', [App\Http\Controllers\ProductController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/products/{id}/delete', [App\Http\Controllers\ProductController::class, 'delete'])->middleware('auth', 'admin');
