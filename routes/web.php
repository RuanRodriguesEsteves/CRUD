<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\InstalacaoFisicaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Página inicial pública ou pode redirecionar para dashboard se quiser
Route::get('/', function () {
    return view('welcome');
});

// Rotas de autenticação do Breeze
require __DIR__.'/auth.php';

// Rotas que exigem login
Route::middleware(['auth'])->group(function () {

    // Dashboard do Breeze
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Perfil do usuário (Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Sua página principal
    Route::get('/home', [IndexController::class, 'index'])->name('home');

    // Rotas de InstalacaoFisica
    Route::prefix('instalacaofisica')->name('instalacaofisica.')->group(function () {
        Route::get('/', [InstalacaoFisicaController::class, 'iniciar'])->name('index'); 
        Route::post('/', [InstalacaoFisicaController::class, 'importar'])->name('importar'); 
        Route::get('/listar', [InstalacaoFisicaController::class, 'listar'])->name('listar'); 
        Route::get('/criar', [InstalacaoFisicaController::class, 'criar'])->name('criar'); 
        Route::post('/salvar', [InstalacaoFisicaController::class, 'salvar'])->name('salvar'); 
        Route::get('/{id}/editar', [InstalacaoFisicaController::class, 'editar'])->name('editar'); 
        Route::put('/{id}', [InstalacaoFisicaController::class, 'alterar'])->name('alterar'); 
        Route::delete('/{id}', [InstalacaoFisicaController::class, 'deletar'])->name('deletar'); 
    });

});
