<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
    return view('menu');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/landing-page', function () {
    return view('direct');
})->name('direct');

Route::get('/landing', [FormController::class, 'selamatDatang'])->name('landing');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::post('/greet', [FormController::class, 'greeting'])->name('greet');
