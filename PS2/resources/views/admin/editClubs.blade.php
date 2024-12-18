@extends('layouts.layoutsAdmin.adminMain')

@section('title', 'Edit Club')

@section('content')

<h1 style="text-align:center">Editar Clube</h1>

<div class="container">
    <form action="{{ url('/admin/editClub/' . $club->id) }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="name">Nome do Clube</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $club->name) }}" required>
        </div>
    
        <div class="form-group">
            <label for="description">Descrição do Clube</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $club->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="num_subscriptions">Número de Assinaturas</label>
            <input type="number" class="form-control" id="num_subscriptions" name="num_subscriptions" value="{{ old('num_subscriptions', $club->num_subscriptions) }}" min="0" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Atualizar Clube</button>
    </form>
    
</div>

@endsection
