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
    // You can point this to one of your main views, e.g., Customer, or a welcome page
    return view('Customer');
})->name('home'); // Optional: a home route

// Route for the Customer page
Route::get('/customer-page', function () { // Changed URL to avoid conflict if /customer is used later for parameters
    return view('Customer');
})->name('customer.page'); // [cite: 95]

// Route for the Item page
Route::get('/item-page', function () { // Changed URL to avoid conflict if /item is used later for parameters
    return view('Item');
})->name('item.page'); // [cite: 95]

// Route for the Order page
Route::get('/order-page', function () { // Changed URL to avoid conflict if /order is used later for parameters
    return view('Order');
})->name('order.page'); // [cite: 95]

// Route for the Order Details page
Route::get('/order-details-page', function () { // Changed URL to avoid conflict if /order-details is used later
    return view('OrderDetails');
})->name('order.details.page'); // [cite: 95]