<?php

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

// Route::get('/aboutus', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\LandingController::class, 'landing'])->name('landing');
Route::get('/about-us', [App\Http\Controllers\LandingController::class, 'about_us'])->name('about-us');
Route::get('/services', [App\Http\Controllers\LandingController::class, 'services'])->name('services');
Route::get('/contact', [App\Http\Controllers\LandingController::class, 'contact'])->name('contact');






