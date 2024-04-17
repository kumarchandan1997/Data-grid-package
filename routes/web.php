<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/user', [UserController ::class, 'index'])->name('User.index');
Route::get('/product', [UserController ::class, 'product'])->name('Product.index');
Route::get('/customer', [UserController ::class, 'customer'])->name('Customer.index');
