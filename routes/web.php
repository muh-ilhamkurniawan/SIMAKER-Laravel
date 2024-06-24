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

use App\Http\Controllers\AdminController;

Route::get('/admins', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admins/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admins/store', [AdminController::class, 'store'])->name('admin.store');
Route::delete('/admins/{id_admin}', [AdminController::class, 'destroy'])->name('admin.destroy');

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

use App\Http\Controllers\KelasController;

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
// Rute untuk memproses form input
Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
Route::delete('/kelas/{kode_kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');


use App\Http\Controllers\KeretaController;

Route::get('/kereta', [KeretaController::class, 'index'])->name('kereta.index');
Route::get('/kereta/create', [KeretaController::class, 'create'])->name('kereta.create');
Route::post('/kereta/store', [KeretaController::class, 'store'])->name('kereta.store');
Route::delete('/kereta/{no_ka}', [KeretaController::class, 'destroy'])->name('kereta.destroy');

use App\Http\Controllers\KeterlambatanController;

Route::get('/keterlambatan', [KeterlambatanController::class, 'index']);