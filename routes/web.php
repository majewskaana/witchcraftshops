<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllProductsController;
use App\Http\Controllers\StoneController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\SpicesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomAuthController;

Route::resource('/', AllProductsController::class);


Route::resource('/stone', StoneController::class);

Route::resource('/cards', CardsController::class);
Route::resource('/spices', SpicesController::class);

Route::get('/auth', function () {
    return view('login');
});

Route::resource('/register', RegistrationController::class);
Route::resource('/login', CustomAuthController::class);



/*Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');*/