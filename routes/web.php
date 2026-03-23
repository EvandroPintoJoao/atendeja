<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\FilaController;
use App\Http\Controllers\AtendimentoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ConfiguracaoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Página de boas-vindas (apenas para não autenticados)
Route::get('/', function () {
    return view('welcome.index');
})->name('welcome');



// Autenticação
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', function (Request $request) {
    // Lógica de autenticação
})->name('login.attempt');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', function (Request $request) {
    // Lógica de registro
})->name('register.attempt');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

// QR Code para fila
Route::get('/fila/qrcode', function () {
    return view('fila.qrcode');
})->name('fila.qrcode');
Route::post('/fila/qrcode/ler', function (Request $request) {
    // Lógica para ler QR e obter número da fila
    return response()->json(['numero' => 'A123']);
})->name('fila.qrcode.ler');

// Dashboard (autenticado)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Pacientes
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/{id}', [PacienteController::class, 'show'])->name('pacientes.show');
Route::get('/pacientes/{id}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit');
Route::put('/pacientes/{id}', [PacienteController::class, 'update'])->name('pacientes.update');
Route::delete('/pacientes/{id}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');

// Fila
Route::get('/fila', [FilaController::class, 'index'])->name('fila.index');
Route::post('/fila/chamar-proximo', [FilaController::class, 'chamarProximo'])->name('fila.chamarProximo');
Route::post('/fila/{id}/atendido', [FilaController::class, 'marcarAtendido'])->name('fila.marcarAtendido');
Route::post('/fila/{id}/priorizar', [FilaController::class, 'priorizar'])->name('fila.priorizar');

// Atendimentos
Route::get('/atendimentos', [AtendimentoController::class, 'index'])->name('atendimentos.index');
Route::post('/atendimentos/{id}/iniciar', [AtendimentoController::class, 'iniciar'])->name('atendimentos.iniciar');
Route::post('/atendimentos/{id}/finalizar', [AtendimentoController::class, 'finalizar'])->name('atendimentos.finalizar');
Route::post('/atendimentos/chamar-proximo', [AtendimentoController::class, 'chamarProximo'])->name('atendimentos.chamarProximo');

// Serviços
Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
Route::get('/servicos/create', [ServicoController::class, 'create'])->name('servicos.create');
Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
Route::get('/servicos/{id}/edit', [ServicoController::class, 'edit'])->name('servicos.edit');
Route::put('/servicos/{id}', [ServicoController::class, 'update'])->name('servicos.update');
Route::delete('/servicos/{id}', [ServicoController::class, 'destroy'])->name('servicos.destroy');

// Configurações
Route::get('/configuracoes', [ConfiguracaoController::class, 'index'])->name('configuracoes.index');
