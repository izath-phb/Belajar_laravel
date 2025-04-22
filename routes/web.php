<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\http\Controllers\HomepageController;

// Route::get('/', function () {
//     return view('web.homepage');
// });

// Route::get('/', function () {
//     $title = "Homepage";
//     return view('web.homepage', ['title' => $title]);
// });


Route::get('/', [HomepageController::class, 'index']);
Route::get('/products', [HomepageController::class, 'products']);
Route::get('/product/{slug}', [HomepageController::class, 'product']);
Route::get('/categories',[HomepageController::class, 'categories']);
Route::get('/category/{slug}', [HomepageController::class, 'category']);
Route::get('/cart', [HomepageController::class, 'cart']);
Route::get('/checkout', [HomepageController::class, 'checkout']);



// Route::get('product/{slug}', function ($slug) {
//     return "halaman single product - " . $slug;
// });

// Route::get('categories', function () {
//     return view("web.categories");
// });

// Route::get('category/{slug}', function ($slug) {
//     return "halaman single category - " . $slug;
// });

// Route::get('cart', function () {
//     $title = "Cart";
//     return view("web.cart", ['title' => $title]);
// });

// Route::get('checkout', function () {
//     $title = "co";
//     return view("web.checkout", ['title' => $title]);
// });


// require __DIR__ . '/auth.php';