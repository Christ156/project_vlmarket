<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Auth::routes();

// Route Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Market
Route::resource('market', App\Http\Controllers\MarketController::class);
Route::post('market/search', [App\Http\Controllers\MarketController::class, 'search'])->name('search');

// Route Profile
Route::get('profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile');
Route::put('/profile/disable/{id}', [App\Http\Controllers\UserController::class, 'disable'])->name('disable');
Route::put('/profile/enable/{id}',[App\Http\Controllers\UserController::class, 'enable'])->name('enable');