<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\InstalacaoFisicaController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('index');
});
*/

Route::get('/', [IndexController::class, 'index'])->name('home');// Página Principal

Route::prefix('instalacaofisica')->name('instalacaofisica.')->group(function () {
    Route::get('/', [InstalacaoFisicaController::class, 'iniciar'])->name('index'); 
    Route::post('/', [InstalacaoFisicaController::class, 'importar'])->name('importar'); // Tela de Importação
    Route::get('/listar', [InstalacaoFisicaController::class, 'listar'])->name('listar'); // Tela com todos os registros
    Route::get('/criar', [InstalacaoFisicaController::class, 'criar'])->name('criar'); // Form de criação
    Route::post('/salvar', [InstalacaoFisicaController::class, 'salvar'])->name('salvar'); // Salvar novo
    Route::get('/{id}/editar', [InstalacaoFisicaController::class, 'editar'])->name('editar'); // Form de edição
    Route::put('/{id}', [InstalacaoFisicaController::class, 'alterar'])->name('alterar'); // Atualizar
    Route::delete('/{id}', [InstalacaoFisicaController::class, 'deletar'])->name('deletar'); // Excluir
});