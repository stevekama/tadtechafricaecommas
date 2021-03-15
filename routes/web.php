<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/shop', [PagesController::class, 'shop'])->name('shop');

Route::get('/product', [PagesController::class, 'product_datails'])->name('product');

Route::get('/blog', [PagesController::class, 'blog'])->name('blog');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/cart', [PagesController::class, 'cart'])->name('cart');

Route::get('/wishlist', [PagesController::class, 'wishlist'])->name('wishlist');

Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');

Route::get('/login-register', [PagesController::class, 'customer_account'])->name('login-register');
