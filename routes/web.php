<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Form
Route::get('/', [FormController::class, 'tambah'])->name('form');
Route::get('/submit-success', function () {
    return view('form.submit-message');
})->name('submit.message');

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

// Admin
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('admin', [FormController::class, 'tampil'])->name('form.tampil');
    Route::get('admin/bidang', [FormController::class, 'sosialbudaya'])->name('admin.bidang');
    Route::get('admin/jadwal', [FormController::class, 'jadwal'])->name('form.jadwal');
    Route::get('admin/detail/{id}', [FormController::class, 'detail'])->name('form.detail');
    Route::get('/notifications/{id}/mark-as-read', [FormController::class, 'markasread'])->name('notifications.markasread');
    Route::get('/notifikasi', function () {
        return view('admin.daftar-notifikasi');
    })->name('notifications.list');
    Route::post('/admin/detail/tambah-bidang/{id}', [FormController::class, 'addbidang'])->name('form.addbidang');
});

// Bidang
Route::get('bidang', function () {
    return view('bidang.dashboard');
})->middleware(['auth', 'verified', 'role:bidang_pemerintahan|bidang_sarana_prasarana|bidang_sosial_budaya|bidang_perekonomian']);


require __DIR__ . '/auth.php';
