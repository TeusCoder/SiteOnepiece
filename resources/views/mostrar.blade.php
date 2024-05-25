@extends('layouts.basic')

@section('title', 'Especifico')

@section('content')

<div class="mostrar">
    <img src="{{ $personagem->imagem ? asset('storage/' . $personagem->imagem) : asset('img/default.jpg') }}"
        alt="imagem do card">
    <div class="nome">
        <p>Nome: {{ $personagem->nome }}</p>
    </div>
    <div class="poder">
        <p>Poder: {{ $personagem->poder }}</p>
    </div>
    <div class="sonho">
        <p>Sonho: {{ $personagem->sonho }}</p>
    </div>
</div>
@endsection
