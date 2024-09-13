<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// routes/web.php

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('shop', [ProductController::class, 'index']);

Route::get('cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('cart/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('shop.checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('shop.checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('shop/checkout/{id}', [ShopController::class, 'checkout'])->name('shop.checkout');
