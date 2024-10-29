<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('jobs.index');


// auth
Route::get('/login', [SessionUserController::class, 'create'])->name('auth.login');
Route::post('/login', [SessionUserController::class, 'store']);

Route::get('/register', [RegisterUserController::class, 'create'])->name('auth.register');
Route::post('/register', [RegisterUserController::class, 'store']);
