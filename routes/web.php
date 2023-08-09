<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\frontend\homecontroller;



use app\Http\Controllers\frontend\aboutcontroller;

use app\Http\Controllers\frontend\contactcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view(' frontend.Home');
});


Route::get('/', function () {
    return view(' frontend.about');
});

Route::get('/', function () {

    return view(' frontend.contact');
});



