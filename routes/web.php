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

Route::get('/', function () {
    return view('designhomepage');
});
use Illuminate\Support\Facades\App;
 
Route::get('/greeting/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'lv'])) {
        abort(400);
    }
 
    App::setLocale($locale);
 
    // ...
});