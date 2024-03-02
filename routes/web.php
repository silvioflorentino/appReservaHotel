<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;

Route::get('/',[ClienteController::class,'showHome'])->name('home');

Route::get('/cadastro-cliente',[ClienteController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-cliente');
Route::post('/cadastro-cliente',[ClienteController::class,'cadCliente'])->name('envia-banco-cliente');


Route::get('/cadastro-funcionario',[FuncionarioController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-funcionario');
Route::post('/cadastro-funcionario',[FuncionarioController::class,'cadFuncionario'])->name('envia-banco-funcionario');

Route::get('/cadastro-quarto',[QuartoController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-quarto');
Route::post('/cadastro-quarto',[QuartoController::class,'cadQuarto'])->name('envia-banco-quarto');


Route::get('/cadastro-reserva',[ReservaController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-reserva');
Route::post('/cadastro-reserva',[ReservaController::class,'cadReserva'])->name('envia-banco-reserva');