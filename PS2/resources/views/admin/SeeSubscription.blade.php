@extends('layouts.layoutsAdmin.adminMain')

@section('title', 'Gerenciamento de Assinaturas')

@section('content')
    <h1>Gerenciar Assinaturas</h1>

    
    {{-- PARE REALIZAR TESTE SE ESTA DELETANDO, EDITANDO OU NÃO --}}
    
    {{-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Clube</th>
                <th>Ativo</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscriptions as $subscription)
                <tr>
                    <td>{{ $subscription->id }}</td>
                    <td>{{ $subscription->name }}</td>
                    <td>{{ $subscription->description }}</td>
                    <td>{{ $subscription->price }}</td>
                    <td>{{ $subscription->club ? $subscription->club->name : 'Sem clube associado' }}</td>
                    <td>{{ $subscription->active ? 'Sim' : 'Não' }}</td>
                    <td>
                        
                        <a href="{{ route('subscriptions.edit', $subscription->id) }}" class="btn btn-warning">Editar</a>
    
                        
                        <form action="{{ route('subscriptions.destroy', $subscription->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar esta assinatura?')">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection
