<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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