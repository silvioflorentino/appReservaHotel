@extends('layout')
@section('content')

<section class="container mt-5">
<form class="row g-3" method="Post" action="{{route('envia-banco-quarto')}}">
@csrf
  <div class="col-md-12">
    <label for="inputNumeroQuarto" class="form-label">Número:</label>
    <input type="text" class="form-control" id="inputNumeroQuarto" name="numeroquarto">
  </div>

  <div class="col-md-12">

    <select class="form-select" name="tipoquarto" aria-label="Default select example">
      <option selected>Tipo:</option>
      <option value="Classe A+">Classe A+</option>
      <option value="Comercial">Comercial</option>
      <option value="Suite">Suite</option>
    </select>
  </div>

  <div class="col-3">
    <label for="inputValorQuarto" class="form-label">Valor:</label>
    <input type="number" Step=".02" class="form-control" id="inputValorQuarto" name="valordiaria">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
<section>
@endsection