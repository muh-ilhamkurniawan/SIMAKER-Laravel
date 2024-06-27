<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

use App\Http\Controllers\CategoryController;

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
// Rute untuk memproses form input
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

use App\Http\Controllers\TrainController;

Route::get('/train', [TrainController::class, 'index'])->name('train.index');
Route::get('/train/create', [TrainController::class, 'create'])->name('train.create');
Route::post('/train/store', [TrainController::class, 'store'])->name('train.store');
Route::delete('/train/{id}', [TrainController::class, 'destroy'])->name('train.destroy');

use App\Http\Controllers\KeterlambatanController;

Route::get('/keterlambatan', [KeterlambatanController::class, 'index']);
