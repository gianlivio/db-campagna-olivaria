<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MolituraController;
use App\Http\Controllers\SpeseBreveTermineController;
use App\Http\Controllers\SpeseLungoTermineController;
use App\Http\Controllers\VenditeController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/moliture', [MolituraController::class, 'apiIndex']);
Route::get('/spese-breve-termine', [SpeseBreveTermineController::class, 'apiIndex']);
Route::get('/spese-lungo-termine', [SpeseLungoTermineController::class, 'apiIndex']);
Route::get('/vendite', [VenditeController::class, 'apiIndex']);

Route::post('/contact', [ContactController::class, 'submit']);