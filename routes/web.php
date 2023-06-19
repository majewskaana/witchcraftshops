<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllProductsController;
use App\Http\Controllers\StoneController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\SpicesController;


Route::resource('/', AllProductsController::class);


Route::resource('/stone', StoneController::class);

Route::resource('/cards', CardsController::class);
Route::resource('/spices', SpicesController::class);

Route::get('/auth', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

