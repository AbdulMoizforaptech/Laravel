<?php

use App\Http\Controllers\productcontroller;
use App\Models\product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/create',[productcontroller::class,'create'])->name('products.create');

Route::post('/products',[productcontroller::class,'store'])->name('products.store');