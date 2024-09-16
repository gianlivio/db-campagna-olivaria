<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\MolituraController;
use App\Http\Controllers\SpeseBreveTermineController;
use App\Http\Controllers\SpeseLungoTermineController;
use App\Http\Controllers\VenditeController;
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

Route::middleware('auth')
    ->prefix('admin') // Prefisso nell'url delle rotte di questo gruppo
    ->name('admin.') // inizio di ogni nome delle rotte del gruppo
    ->group(function () {
        // Rotta per la dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Rotte CRUD per Molitura
        Route::resource('molitura', MolituraController::class);

        // Rotte CRUD per Spese Breve Termine
        Route::resource('spese_breve_termine', SpeseBreveTermineController::class);

        // Rotte CRUD per Spese Lungo Termine
        Route::resource('spese_lungo_termine', SpeseLungoTermineController::class);

        // Rotte CRUD per Vendite
        Route::resource('vendite', VenditeController::class);
    });

require __DIR__ . '/auth.php';