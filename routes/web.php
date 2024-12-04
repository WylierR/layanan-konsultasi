<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/form', function () {
//     return view('form.form');
// });
Route::get('/', [FormController::class, 'tambah'])->name('form');

Route::post('/form/submit', [FormController::class, 'submit'])->name('form.submit');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get(
    'admin',
    [FormController::class, 'tampil']
)->middleware(['auth', 'verified', 'role:admin'])->name('form.tampil');

Route::get(
    'admin/jadwal',
    [FormController::class, 'jadwal']
)->middleware(['auth', 'verified', 'role:admin'])->name('form.jadwal');

Route::get(
    'admin/detail/{id}',
    [FormController::class, 'detail']
)->middleware(['auth', 'verified', 'role:admin'])->name('form.detail');

Route::get('bidang', function () {
    return view('bidang.dashboard');
})->middleware(['auth', 'verified', 'role:bidang']);


require __DIR__ . '/auth.php';
