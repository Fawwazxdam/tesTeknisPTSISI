<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoopController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('login');
});
Route::get('segitiga', function () {
    return view('segitiga');
});
Route::get('angka', function () {
    return view('angka');
});

Route::post('piramida', [App\Http\Controllers\LoopController::class, 'segitiga'])->name('piramida');
Route::post('baris', [App\Http\Controllers\LoopController::class, 'angka'])->name('baris');

Auth::routes();
Route::middleware(['auth'])->group(function () {


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/masuk', [App\Http\Controllers\DashboardController::class, 'masuk'])->name('masuk');
    Route::get('/izin', [App\Http\Controllers\DashboardController::class, 'izin'])->name('izin');
    Route::post('/prosesizin', [App\Http\Controllers\DashboardController::class, 'prosesizin'])->name('prosesizin');
    Route::get('/cuti', [App\Http\Controllers\DashboardController::class, 'cuti'])->name('cuti');
    Route::post('/prosescuti', [App\Http\Controllers\DashboardController::class, 'prosescuti'])->name('prosescuti');

    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/user', UserController::class);
    Route::get('/delus/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('delus');
    Route::resource('/menu', MenuController::class);
    Route::get('/delme/{menu}', [App\Http\Controllers\MenuController::class, 'destroy'])->name('delme');
    Route::resource('/absen', AbsenController::class);
    Route::get('/gaji', [App\Http\Controllers\GajiController::class, 'index'])->name('gaji');
    Route::get('/detailgaji/{id}', [App\Http\Controllers\GajiController::class, 'show'])->name('detailgaji');
});
