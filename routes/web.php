<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentController;

// Rota principal
Route::get('/', [CarroController::class, 'home'])->middleware(['auth', 'verified'])->name('home');

// Rotas para o perfil do usuário
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');
});

// Rotas para carros
Route::middleware('auth')->group(function () {
    Route::get('/cars', [CarroController::class, 'index'])->name('cars.index');
    Route::get('/cars/create', [CarroController::class, 'create'])->name('cars.create');
    Route::post('/cars', [CarroController::class, 'store'])->name('cars.store');
    Route::get('/cars/{id}', [CarroController::class, 'show'])->name('cars.show');
    Route::get('/cars/{id}/edit', [CarroController::class, 'edit'])->name('cars.edit');
    Route::put('/cars/{id}', [CarroController::class, 'update'])->name('cars.update');
    Route::delete('/cars/{id}', [CarroController::class, 'destroy'])->name('cars.destroy');

    // Rotas para usuários
    Route::get('/users', [UserController::class, 'index'])->middleware(['auth']);

    // Rotas para aluguel
    Route::get('/rents/create/{carro}', [RentController::class, 'create'])->name('rents.create');
    Route::post('/rents/alugar', [RentController::class, 'alugar'])->name('rents.alugar');
    Route::get('/rents', [RentController::class, 'index'])->name('rents.index');
});

require __DIR__ . '/auth.php';
