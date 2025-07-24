<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas generales para usuarios autenticados
Route::middleware('auth')->group(function () {
    //perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Rutas específicas para administradores
    Route::middleware(['auth','role:admin'])->group(function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');

    });

    // Rutas específicas para Clientes
    Route::middleware(['auth','role:client'])->group(function () {
        Route::get('/client', function () {
            return view('client.dashboard');
        })->name('client.dashboard');
});

});

require __DIR__.'/auth.php';
