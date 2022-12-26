<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Models\Car;
use App\Models\Product;
use App\Models\User;
use Faker\Extension\AddressExtension;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/cars', function () {
    $car = Car::first();
    return view('cars')->with('car', $car);
});


Route::get('/products', function () {
    // $product = Product::first();
    $product = Product::find(2);
    return view('products')->with('product', $product);
});
