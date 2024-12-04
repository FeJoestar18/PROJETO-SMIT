@extends('layouts.layoutsAdmin.adminMain')

@section('title', 'Criação de Assinaturas')

@section('content')

<br>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Criar uma Assinatura</h1>
    <form action="/admin/subscriptions" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Nome da Assinatura:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome da Assinatura">
      </div>
      <div class="form-group">
        <label for="description">Descrição da Assinatura:</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Descrição do Clube:">
      </div>
      <div class="form-group">
        <label for="price">Preço</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Preço" min="0" required>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="active" name="active">
        <label class="form-check-label" for="active">Ativa</label>
    </div>
    
      
      <div class="form-group">
        <label for="started_at">Data de Inicio</label>
        <input type="datetime-local" class="form-control" id="started_at" name="started_at">
      </div>
      <div class="form-group">
        <label for="ended_at">Data de Fim</label>
        <input type="datetime-local" class="form-control" id="ended_at" name="ended_at">
      </div>

      {{-- <input type="hidden" id="club_id" name="club_id" value="{{ $club->id }}"> --}}
      <input type="submit" class="btn btn-primary" value="Criar Assinatura">
    </form>
  </div>

@endsection