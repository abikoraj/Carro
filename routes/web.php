<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
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

Route::view('/coming-soon', 'coming-soon')->name('commingsoon');

Route::group(['middleware' => 'commingsoon'], function () {
        Route::view('/', 'index')->name('home');
        Route::view('/contact', 'contact.index')->name('contact');
        Route::get('/service',[ServiceController::class,'index'])->name('service');
        Route::get('/about',[AboutController::class,'index'])->name('about');
        Route::get('/portfolio',[PortfolioController::class,'index'])->name('portfolio');
        Route::view('/appointment', 'contact.appointment')->name('appointment');
});

Route::prefix('admin')->group(function(){
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::prefix('slider')->group(function(){
        Route::get('/',[SliderController::class,'add'])->name('slider.add');
    });

    Route::prefix('header-settings')->group(function(){
        Route::get('/',[HeaderController::class,'index'])->name('header.settings');
        Route::post('/edit/{header}',[HeaderController::class,'edit'])->name('header.edit');
    });

    Route::prefix('about')->group(function(){
        Route::get('/',[AboutController::class,'add'])->name('about.add');
    });

    Route::prefix('portfolio')->group(function(){
        Route::get('/',[PortfolioController::class,'add'])->name('portfolio.add');
    });

    Route::prefix('services')->group(function(){
        Route::get('/',[ServiceController::class,'add'])->name('services.add');
    });

    Route::prefix('testimonial')->group(function(){
        Route::get('/',[TestimonialController::class,'add'])->name('testimonial.add');
    });

    Route::prefix('brands')->group(function(){
        Route::get('/',[BrandController::class,'add'])->name('brands.add');
        Route::post('/submit',[BrandController::class,'submit'])->name('brands.submit');
    });

    // Route::view('/settings', 'back.header-settings');
    // Route::view('/brands', 'back.brands');
});
