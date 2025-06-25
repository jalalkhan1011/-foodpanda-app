<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CustomAuthController::class, 'index']);

Route::get('/login',[CustomAuthController::class,'showLoginForm']);
Route::post('/login',[CustomAuthController::class,'login'])->name('login');
Route::post('/logout',[CustomAuthController::class,'logout'])->name('logout');
Route::get('/sso-login',[CustomAuthController::class,'ssoLogin']);
Route::get('/sso-logout',[CustomAuthController::class,'ssoLogout']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
