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
    return view('welcome');
});

use App\Http\Controllers\AdminController;

Route::get('/admins', [AdminController::class, 'index']);

use App\Http\Controllers\KelasController;

Route::get('/kelas', [KelasController::class, 'index']);

use App\Http\Controllers\KeretaController;

Route::get('/kereta', [KeretaController::class, 'index']);

use App\Http\Controllers\KeterlambatanController;

Route::get('/keterlambatan', [KeterlambatanController::class, 'index']);