<?php

use App\Http\Controllers\IndoTurkiController;
use App\Models\IndoTurki;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('indoturki/index', [IndoTurkiController::class, 'index'])->name('indoturki.index');
Route::get('indoturki/create', [IndoTurkiController::class, 'create'])->name('indoturki.create');
Route::post('indoturki/store', [IndoTurkiController::class, 'store'])->name('indoturki.store');
Route::get('indoturki/{indoturki}/edit', [IndoTurkiController::class, 'edit'])->name('indoturki.edit');
Route::put('indoturki/{indoturki}', [IndoTurkiController::class, 'update'])->name('indoturki.update');
Route::delete('/indoturki/{indoturki}', [IndoTurkiController::class, 'destroy'])->name('indoturki.destroy');
