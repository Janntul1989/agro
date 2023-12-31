<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\frontend\diseasecontroller;
use App\Http\Controllers\frontend\registrationcontroller;
use App\Http\Controllers\LangController;
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
    return view('welcome');
});



Route::group(['prefix'=>'/lang'], function (){
Route::get('lang', [LangController::class, 'lang']);
    });
Route::group(['prefix'=>'/lang_change'], function (){

 Route::get('lang/change', [LangController::class, 'lang_change'])->name('lang.change');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/',[homecontroller::class, 'index']);

Route::get('/registration',[registrationcontroller::class, 'index']);
Route::get('/disease',[diseasecontroller::class, 'index']);

