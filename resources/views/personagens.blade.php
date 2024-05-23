
@extends('layouts.basic')

@section('title', 'Personagens')

@section('content')
<div class="cards">
    @foreach($personagens as $personagem)
        <div class="c-card">
            <img src="{{ $personagem->imagem ? asset('savePersonagem/' . $personagem->imagem) : asset('img/default.jpg') }}" alt="imagem do card">
            <h2>{{ $personagem->nome }}</h2>
            <p>{{ $personagem->poder }}</p>
            <p>{{ $personagem->sonho }}</p>
        </div>
    @endforeach
</div>
@endsection



{{-- <div class="cards">
    <div class="c-card">
        <img src="{{ asset('img/luffy.jpg') }}" alt="imagem do card">
        <h2>Luffy</h2>
        <p>Eu tenho o poder do Deus Sol, O nika.</p>
        <p>Meu maior sonho é me tornar o Rei dos Piratas.</p>
    </div>

    <div class="c-card">
        <img src="{{ asset('img/sanji.jpg') }}" alt="imagem do card">
        <h2>Sanji</h2>
        <p>Eu possuo minha genetica tranformada, luto com as pernas e sou o maior cozinheiro.</p>
        <p>Meu maior sonhor é conhecer o all blue.</p>
    </div>

    <div class="c-card">
        <div id="imgz">
            <img src="{{ asset('img/zoro.jpg') }}" alt="imagem do card">
        </div>
        <h2>Zoro</h2>
        <p>Possuo o estilo santoryu.</p>
        <p>Meu maior sonho é me tornar o melhor espadachim do mundo.</p>
    </div> --}}
