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
    return view('home',[
        "name"=>"Andalus",
        "tes"=>"OK bos"
    ]);
});

Route::get('/our-service', function () {
    return view('service',[
        "name"=>"Andalus",
        "tes"=>"OK bos"
    ]);
});

Route::get('/our-product', function () {
    return view('product',[
        "name"=>"Andalus",
        "tes"=>"OK bos"
    ]);
});
