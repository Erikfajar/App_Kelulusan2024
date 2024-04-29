<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataTarunaController;
use App\Http\Controllers\HalamanDepanController;
use App\Http\Controllers\SetingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// TEST MAIN
// Route::get('/test', function(){
//     return view('layout.main');
// });

// ROUTE HALAMAN DEPAN --------------------------------------------
Route::get('/', [HalamanDepanController::class, 'index'])->name('halaman_depan');

// ROUTE LOGIN ----------------------------------------------------
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login/authenticate', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// ROUTE ADMIN ----------------------------------------------------
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // ROUTE DATA TARUNA ----------------------------------------
    Route::resource('/data_taruna', DataTarunaController::class);
    Route::post('/data_taruna/import', [DataTarunaController::class, 'import'])->name('data_taruna.import');

    // ROUTE SETINGS
    Route::get('/setings', [SetingsController::class, 'index'])->name('setings.index');
    Route::post('/setings/update/{id}', [SetingsController::class, 'ubah_setings'])->name('setings.update');
});
