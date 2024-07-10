<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\KeterlambatanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Route middleware for authenticated users
Route::middleware(['auth'])->group(function () {
    // Route for index page when authenticated
    Route::get('/', function () {
        return view('index'); // Change 'index' to the actual view you want to show
    })->name('index');
    
    // Other authenticated routes
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    
    Route::get('/train', [TrainController::class, 'index'])->name('train.index');
    Route::get('/train/create', [TrainController::class, 'create'])->name('train.create');
    Route::post('/train/store', [TrainController::class, 'store'])->name('train.store');
    Route::delete('/train/{id}', [TrainController::class, 'destroy'])->name('train.destroy');
    Route::get('/train/{id}/edit', [TrainController::class, 'edit'])->name('train.edit');
    Route::put('/train/{id}', [TrainController::class, 'update'])->name('train.update');

    
    Route::get('/keterlambatan', [KeterlambatanController::class, 'index']);
});

// Authentication routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
