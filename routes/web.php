<?php

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\PageController;
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
    return view('index');
});

Route::get('/shop', [PageController::class , 'shop']);
Route::get('/cart', [PageController::class , 'cart']);
Route::get('/wishlist', [PageController::class , 'wishlist']);
Route::get('/profile', [PageController::class , 'profile']);
Route::get('/checkout', [PageController::class , 'checkout']);
Route::get('/contact', [PageController::class , 'contact']);





