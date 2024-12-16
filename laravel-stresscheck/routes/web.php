<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StressCheckController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', [StressCheckController::class, 'showForm'])->name('stressCheck.form');
Route::post('/submit', [StressCheckController::class, 'submitForm'])->name('stressCheck.submit');
Route::get('/thank-you', [StressCheckController::class, 'thankYou'])->name('stressCheck.thankYou');