@extends('layouts.main')

@section('title', 'Bem vindo ao ClubeFy')

@section('content')

<link rel="stylesheet" href="{{ asset('css/Welcome.css') }}">
<h1>Bem vindo ao ClubeFy</h1>

<section id="about-us">
    <h2>Quem nós somos</h2>
    <p>
        Somos uma equipe dedicada a transformar ideias em realidade, oferecendo soluções inovadoras e eficientes para nossos clientes. Com paixão pelo que fazemos, buscamos sempre superar expectativas.
    </p>

    <h3>Nossa missão</h3>
    <p>
        Proporcionar produtos e serviços de alta qualidade, criando valor para nossos clientes e impactando positivamente a sociedade.
    </p>

    <h3>Nossa visão</h3>
    <p>
        Ser reconhecidos como líderes no mercado, pela inovação, ética e excelência em todas as nossas iniciativas.
    </p>

    <h3>Nossa equipe</h3>
    <p>
        Contamos com profissionais experientes e apaixonados, que trabalham em equipe para alcançar resultados extraordinários. Juntos, acreditamos no poder da colaboração para superar desafios.
    </p>
</section>


@endsection