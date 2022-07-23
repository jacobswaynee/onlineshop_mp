<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', [App\Http\Controllers\HomeController::class 
,'index'])->name('home');
Route::view('/about', view:'about')->name('about');
Route::view('/contact', view:'contactForm')->name('contact');
Route::view('/portfolio', view:'portfolio')->name('portfolio');
Route::view('/gallery', view:'gallery')->name('gallery');
Route::view('/service', view:'service')->name('service');
Route::view('/team', view:'team')->name('team');
Route::get('contact-us', [App\Http\Controllers\ContactController::class, 'index']);
Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');
// Route::get('image-upload',view: 'index');
// Route::post('image-upload', 'store')->name('image.store');
Route::resource('products', App\Http\Controllers\ProductController::class,);

