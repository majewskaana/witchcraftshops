<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllProductsController;
use App\Http\Controllers\StoneController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\SpicesController;


Route::resource('/', AllProductsController::class);

Route::get('categories', function (){
return view('greetingandcategorychoosing');
}
);

Route::resource('/stone', StoneController::class);

Route::resource('/cards', CardsController::class);

Route::resource('/spices', SpicesController::class);