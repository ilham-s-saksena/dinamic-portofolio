<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function () {
    return view('example');
});

Route::controller(AuthController::class)->prefix('auth')->group(function(){
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
    Route::get('redirect', 'redirect');
    Route::get('callback', 'callback');
});

Route::controller(TemplateController::class)->prefix('admin/template')->group(function(){
    Route::get('/', 'template');
});

Route::controller(PortofolioController::class)->group(function() {
   Route::get('/{slug}', 'getPorto'); 
});

Route::middleware(['auth', 'user'])->prefix('u')->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard', 'userDashboard');
        Route::get('form', 'form');
    });
});

Route::middleware(['auth', 'admin'])->prefix('a')->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard', 'adminDashboard');
    });
});
