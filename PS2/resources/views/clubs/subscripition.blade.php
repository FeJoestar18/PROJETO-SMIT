@extends('layouts.main')

@section('title', 'Bem vindo ao ClubeFy')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque uma Assinatura</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Participe de um Clube</h2>
    <p class="subtitle">Veja os Clubes disponiveis</p>
    <div id="cards-container" class="row">
        @foreach($ClubSubscription as $ClubSubscription)
        <div class="card col-md-3">
            {{-- <img src="/img/RyanSp.png" alt="{{ $ClubSubscription->title }}"> --}}
           <p>{{ $ClubSubscription->name }}</p>
            <div class="card-body">
                <p class="card-date"></p>
                <h5 class="card-title">{{ $ClubSubscription->description }}</h5>
                <p class="card-price">{{ $ClubSubscription->price }}</p>
                <p class="card-participants"></p>
                <a href="produtos" class="btn btn-primary">Visite o Clube</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection