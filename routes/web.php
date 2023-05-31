<?php

namespace App\Http\Controllers;

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

Route::get('/calculator', [CalculatorController::class,'index'])->name('health.index');

Route::get('/registration', [RegistrationController::class,'index'])->name('health.index');


Route::get('/', [HealthController::class,'index'])->name('health.index');
Route::post('/post', [HealthController::class,'calculator'])->name('health.calculator');
