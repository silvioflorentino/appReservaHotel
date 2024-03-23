<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;

Route::get('/',[ClienteController::class,'showHome'])->name('home');
//Grupo de Cliente
Route::get('/cadastro-cliente',[ClienteController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-cliente');
Route::post('/cadastro-cliente',[ClienteController::class,'cadCliente'])->name('envia-banco-cliente');
Route::get('/gerenciar-cliente',[ClienteController::class,'gerenciarCliente'])->name('gerenciar-cliente');
Route::get('/alterar-cliente/{id}',[ClienteController::class,'mostrarGerenciarClienteId'])->name('mostrar-cliente');
Route::put('/alterar-cliente/{id}',[ClienteController::class,'alterarClienteBanco'])->name('alterar-cliente');
Route::delete('/apaga-cliente/{id}',[ClienteController::class,'destroy'])->name('apaga-cliente');



//Grupo de Funcionário
Route::get('/cadastro-funcionario',[FuncionarioController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-funcionario');
Route::post('/cadastro-funcionario',[FuncionarioController::class,'cadFuncionario'])->name('envia-banco-funcionario');
Route::get('/gerenciar-funcionario',[FuncionarioController::class,'gerenciarFuncionario'])->name('gerenciar-funcionario');





//Grupo de Quarto
Route::get('/cadastro-quarto',[QuartoController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-quarto');
Route::post('/cadastro-quarto',[QuartoController::class,'cadQuarto'])->name('envia-banco-quarto');
Route::get('/gerenciar-quarto',[QuartoController::class,'gerenciarQuarto'])->name('gerenciar-quarto');





//Grupo de Reserva
Route::get('/cadastro-reserva',[ReservaController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-reserva');
Route::post('/cadastro-reserva',[ReservaController::class,'cadReserva'])->name('envia-banco-reserva');
Route::get('/gerenciar-reserva',[ReservaController::class,'gerenciarReserva'])->name('gerenciar-reserva');




