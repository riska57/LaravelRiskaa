<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;


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

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/user', function () {
    return view('user');
});
Route::get('/user', function () {
    return view('user');
});

Route::get('/sekolahs', [SiswaController::class, 'index'])->name('siswas.index');
Route::get('/sekolahs/{id}/edit', [SiswaController::class, 'edit'])->name('siswas.edit');
Route::put('/sekolahs/{id}', [SiswaController::class, 'update'])->name('siswas.update');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswas.destroy');
