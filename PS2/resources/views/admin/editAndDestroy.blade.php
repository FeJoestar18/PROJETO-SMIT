@extends('layouts.layoutsAdmin.adminMain')

@section('title', 'Gerenciamento de Clubes')

@section('content')


<style>
    h1 
    {
        margin-bottom: 50px;
        padding-top: 60px;
    }

        .buttom{
            display: flex;
            justify-content: center;
            gap: 10px;
            /* padding-left: 600px; */
        }

    .btn.btn-primary
    {
        display: flex;
        justify-content: center;
        gap: 10px;
    }
</style>

<h1 style="text-align:center">Gerenciar Meus Clubes</h1>

<div id="events-container" class="col-md-12">
    <h2>Participe de um Clube</h2>
    <p class="subtitle">Veja os Clubes disponiveis</p>
    <div id="cards-container" class="row">
        @foreach($clubs as $club)
    <div class="card col-md-3">
    <img src="/img/RyanSp.png" alt="{{ $club->title }}">
    <p>{{ $club->name }}</p>
    <div class="card-body">
    <h5 class="card-title">{{ $club->description }}</h5>
    <a href="produtos" class="btn btn-primary">Visite o Clube</a>
    <div class="buttom">

        <input type="submit" class="btn btn-primary" value="Editar">
        <form action="{{ route('destroy', $club->id) }}" method="POST"></form>
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-primary" value="Deletar">
        </div>
    </div>
    </div>
        @endforeach
    </div>
    </div>
    {{-- EDITAR E DELETAR CLUBS--}}
    
</div>

@endsection