<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\TaskManager;
use Illuminate\Support\Facades\Route;

// Route for login
Route::get('login', [AuthManager::class, 'login'])->name('login');
Route::post('login', [AuthManager::class, 'loginPost'])->name('loginPost');

// Route for register (sign-in)
Route::get('signin', [AuthManager::class, 'signin'])->name('signin');
Route::post('signin', [AuthManager::class, 'signinPost'])->name('signinPost');

// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/', [TaskManager::class,'tasksList'])->name('home');
    
    
    Route::get('addTask', [TaskManager::class, 'addTask'])->name('addTask');
    Route::post('addTask', [TaskManager::class, 'addTaskPost'])->name('addTaskPost');
    Route::get('UpdateTaskStatus/{id}', [TaskManager::class, 'UpdateTaskStatus'])->name('UpdateTaskStatus');
    Route::get('DeleteTaskStatus/{id}', [TaskManager::class, 'DeleteTaskStatus'])->name('DeleteTaskStatus');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

