<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoneController;

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

/*Route::get('/', function () {
    return view('designhomepage');

});*/

Route::get('/', function (){
    return view('greetingandcategorychoosing');
});

Route::resource('stone', StoneController::class);


Route::get('/stone', function (){
    return view('stonecatalogue');
});

Route::get('/cards', function (){
    return view('cardscatalogue');
});

Route::get('/spices', function (){
    return view('spicescatalogue');
});
