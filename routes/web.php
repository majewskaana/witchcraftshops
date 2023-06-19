<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllProductsController;
use App\Http\Controllers\StoneController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\SpicesController;
use App\Http\Controllers\CustomAuthController;


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


Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');