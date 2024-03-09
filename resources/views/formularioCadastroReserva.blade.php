@extends('layout')
@section('content')

<section class="container mt-5">
  <h1> Reserva de Quarto </h1>
<form class="row g-3" method="Post" action="{{route('envia-banco-reserva')}}">
@csrf
  <div class="col-md-3">
    <label for="inputCodigoFuncionario" class="form-label">Digite o Código do Funcionário</label>
    <input type="text" class="form-control" id="inputCodigoFuncionario" name="idfuncionario">
  </div>

  <div class="col-md-9">
    <label for="inputNomeFuncionario" class="form-label">Nome do Funcionário:</label>
    <input type="text" class="form-control" id="inputNomeFuncionario" readonly name="nomefuncionario" >
  </div>

  <div class="col-md-3">
    <label for="inputCodigoCliente" class="form-label">Digite o Código do Cliente</label>
    <input type="text" class="form-control" id="inputCodigoCliente"  name="idcliente" >
  </div>

  <div class="col-md-9">
    <label for="inputNomeCliente" class="form-label">Nome Cliente:</label>
    <input type="text" class="form-control" id="inputNomeCliente" readonly name="nomecliente" >
  </div>

  <div class="col-md-2">
    <label for="inputCodigoQuarto" class="form-label">Digite o Número do Quarto</label>
    <input type="text" class="form-control" id="inputCodigoQuarto" name="numeroquarto" >
  </div>

  <div class="col-md-4">
    <label for="inputTipoQuarto" class="form-label">Tipo:</label>
    <input type="text" class="form-control" id="inputTipoQuarto" readonly name="tipoquarto" >
  </div>
  <div class="col-md-4">
    <label for="inputValorDiaria" class="form-label">Valor da Diária:</label>
    <input type="email" class="form-control" id="inputValorDiaria" readonly name="valordiaria" >
  </div>
  <div class="col-md-3">
    <label for="inputDataEntrada" class="form-label">Data Entrada:</label>
    <input type="date" class="form-control" id="inputDataEntrada" name="dataentrada" >
  </div>
  <div class="col-md-3">
    <label for="inputDataSaida" class="form-label">Data Saída:</label>
    <input type="date" class="form-control" id="inputDataSaida" name="datasaida" >
  </div>
  <div class="col-md-3">
  <label for="inputValorTotal" class="form-label">Valor Total:</label>
  <div class="input-group mb-3">
  <span class="input-group-text">R$</span>
  <input type="text" class="form-control" name="valortotal"  aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>
  </div>
  <div class="col-md-5">
  <label for="inputSituacaoPagamento" class="form-label">Situação do pagamento:</label>
<select class="form-select" name="situacao" aria-label="Default select example">
<option selected value="Pendente">Pendente</option>
<option value="Pago">Pago</option>
</select>
  </div>
    <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
<section>
@endsection