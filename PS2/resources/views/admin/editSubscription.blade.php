@extends('layouts.layoutsAdmin.adminMain')

@section('title', 'Editar Assinatura')

@section('content')

    <h1>Editar Assinatura</h1>


    {{-- PARE REALIZAR TESTE SE ESTA DELETANDO, EDITANDO OU NÃO --}}

    {{-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}

    {{-- FORMULARIO DE EDITAR SUBSCRIPTION --}}

    <form action="{{ route('subscriptions.update', $subscription->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome da Assinatura</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $subscription->name) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description', $subscription->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Preço</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $subscription->price) }}" required>
        </div>

        <div class="form-group">
            <label for="club_id">Clube</label>
            <select class="form-control" id="club_id" name="club_id" required>
                @foreach($clubs as $club)
                    <option value="{{ $club->id }}" {{ old('club_id', $subscription->club_id) == $club->id ? 'selected' : '' }}>
                        {{ $club->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="active">Ativo</label>
            <select class="form-control" id="active" name="active" required>
                <option value="1" {{ old('active', $subscription->active) ? 'selected' : '' }}>Sim</option>
                <option value="0" {{ old('active', !$subscription->active) ? 'selected' : '' }}>Não</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Assinatura</button>
    </form>

@endsection
