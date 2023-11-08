<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

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

Route::get('/google-auth/redirect', [AuthController::class, 'redirectToGoogle'])->name('redirectToGoogle');

Route::get('/google-auth/callback', [AuthController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');

Route::get('/facebook-auth/redirect', [AuthController::class, 'redirectToFacebook'])->name('redirectToFacebook');

Route::get('/facebook-auth/callback', [AuthController::class, 'handleFacebookCallback'])->name('handleFacebookCallback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
