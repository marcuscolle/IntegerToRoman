<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\IntegerToRomanController;

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

Route::get('/', [IntegerToRomanController::class, 'index'])->name('front.index');
Route::post('/convert', [IntegerToRomanController::class, 'convert'])->name('front.convert');
