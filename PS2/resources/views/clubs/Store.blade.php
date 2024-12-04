@extends('layouts.main')

@section('title', 'Bem vindo ao ClubeFy')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Clube</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Participe de um Clube</h2>
    <p class="subtitle">Veja os Clubes disponiveis</p>
    <div id="cards-container" class="row">
        @foreach($Club as $Club)
        <div class="card col-md-3">
            <img src="/img/RyanSp.png" alt="{{ $Club->title }}">
           <p>{{ $Club->name }}</p>
            <div class="card-body">
                <p class="card-date"></p>
                <h5 class="card-title">{{ $Club->description }}</h5>
                <p class="card-price"></p>
                <p class="card-participants"></p>
                <a href="produtos" class="btn btn-primary">Visite o Clube</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection