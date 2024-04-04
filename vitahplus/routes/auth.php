<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::post('/auth/login', [AuthController::class, 'login'])->name('auth/login');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth/register');