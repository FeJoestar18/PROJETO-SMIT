@extends('layouts.layoutsAdmin.adminMain')

@section('title', 'Criação de Clubes')

@section('content')
<br>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Criar um Clube</h1>
    <form action="/admin/clubs/store" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Nome do Clube:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Clube">
      </div>
      <div class="form-group">
        <label for="title">Descrição do Clube:</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Descrição do Clube:">
      </div>
      <div class="form-group">
        <label for="num_subscriptions">Número de Assinaturas:</label>
        <input type="number" class="form-control" id="num_subscriptions" name="num_subscriptions" placeholder="Número de Assinaturas" min="0" required>
    </div>
      
      <input type="submit" class="btn btn-primary" value="Criar Clube">
    </form>
  </div>

@endsection