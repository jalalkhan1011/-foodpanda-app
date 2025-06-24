<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login',[CustomAuthController::class,'showLoginForm']);
Route::post('/login',[CustomAuthController::class,'login'])->name('login');
Route::post('/logout',[CustomAuthController::class,'logout'])->name('logout');
Route::get('/sso-login',[CustomAuthController::class,'ssoLogin']);
Route::get('/sso-logout',[CustomAuthController::class,'ssoLogout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
