<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacientesController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/conocenos', [HomeController::class, 'about'])->name('about');
Route::get('/preguntas-frecuentes', [HomeController::class, 'faq'])->name('faq');
Route::get('/servicios', [HomeController::class, 'servicios'])->name('servicios');
Route::get('login', [HomeController::class, 'login'])->name('login');

Route::resource('pacientes', PacientesController::class)->middleware('auth');