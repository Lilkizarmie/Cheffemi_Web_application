<?php

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/shop', function () {
    return view('shop');
});
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/categories', function () {
        return view('admin.categories');
    })->name('categories');
    Route::get('/products', function () {
        return view('admin.products');
    })->name('products');
    Route::get('/orders', function () {
        return view('admin.orders');
    })->name('orders');
    Route::get('/customers', function () {
        return view('admin.customers');
    })->name('customers');
    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');
    Route::get('/coupons', function () {
        return view('admin.coupons');
    })->name('coupons');
});
