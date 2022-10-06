<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\_DashclientController;
use App\Http\Controllers\_DashproductController;
use App\Http\Controllers\_DashsaleController;
use App\Http\Controllers\_DashsupplierController;
use App\Http\Controllers\_DashstaffController;
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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shopping-cart', function () {
    return view('shopping-cart');
});
Route::get('/product-view', function () {
    return view('prod-view');
});


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/clients', [_DashclientController::class, 'index']);
Route::get('/admin/products', [_DashproductController::class, 'index']);
Route::get('/admin/sales', [_DashsaleController::class, 'index']);
Route::get('/admin/suppliers', [_DashsupplierController::class, 'index']);
Route::get('/admin/staff', [_DashstaffController::class, 'index']);
