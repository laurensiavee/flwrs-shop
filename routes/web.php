<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Product;


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
    return view('home', [
        "title" => "Home"
    ]);
});

// Route::get('/products', function () {
//     return view('products', [
//         "title" => "Products"
//     ]);
// });

Route::get('/products', [ProductController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us"
    ]);
});

// Route::get('/product-detail', function () {
//     return view('product-detail', [
//         "title" => "Product Detail"
//     ]);
// });

Route::get('/product-detail/{product:slug}', [ProductController::class, 'single']);

// Route::get('/login', function () {
//     return view('login', [
//         "title" => "Login"
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Route::get('/register', function () {
//     return view('register', [
//         "title" => "Register"
//     ]);
// });

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('/update-profile', [RegisterController::class, 'update'])->middleware('guest');
// Route::resource('/update-profile', [RegisterController::class])->name('update')->middleware('auth');
// Route::resource('/admin-products/products', AdminProductController::class)->middleware('admin');


Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
})->middleware('auth');

Route::get('/update-profile', function () {
    return view('update-profile', [
        "title" => "Update Profile"
    ]);
})->middleware('auth');


Route::get('/cart', function () {
    return view('cart', [
        "title" => "cart"
    ]);
})->middleware('auth');

Route::get('/check-out', function () {
    return view('check-out', [
        "title" => "check-out"
    ]);
})->middleware('auth');

Route::get('/transactions', function () {
    return view('transactions', [
        "title" => "transactions"
    ]);
})->middleware('auth');

// 

Route::get('/add-category', function () {
    return view('add-category', [
        "title" => "add category"
    ]);
})->middleware('admin');

Route::resource('categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::resource('/categories', AdminCategoryController::class)->middleware('admin');

Route::get('/add-product', function () {
    return view('add-product', [
        "title" => "add product"
    ]);
})->middleware('admin');

// Route::get('/admin-products/products/{product:slug}', function (Product $product){
//     return $product;
// });
Route::resource('/admin-products/products', AdminProductController::class)->middleware('admin');
// Route::resource('admin-products/products/{}', AdminProductController::class)->except('show')->middleware('admin');
// Route::post('admin-products/{slug}', [AdminProductController::class, 'destroy'])->name('delete')->middleware('admin');

