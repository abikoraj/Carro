<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/', 'index')->name('home');
Route::view('/contact', 'contact.index')->name('contact');
Route::view('/service', 'OurServices.index')->name('service');
Route::view('/about', 'about.index')->name('about');

Route::prefix('admin')->group(function(){
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::prefix('slider')->group(function(){
        Route::get('/',[SliderController::class,'index']);
    });

    Route::prefix('header-settings')->group(function(){
        Route::get('/',[HeaderController::class,'index'])->name('header.settings');
        Route::post('/edit/{header}',[HeaderController::class,'edit'])->name('header.edit');
    });

    Route::prefix('about')->group(function(){
        Route::get('/',[AboutController::class,'add'])->name('about.add');
    });

    Route::view('/settings', 'back.header-settings');
    Route::view('/brands', 'back.brands');
});
