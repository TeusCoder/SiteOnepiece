@extends('layouts.basic')

@section('title', 'Especifico')

@section('content')

<div class="container">
    <div class="c-card-2" >
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
        <div class="form_grupo">
            <input type="hidden" name="acao" value="enviar">
           <a id="btn-2" href="{{route('site.personagens')}}"><button type="submit" name="Submit" class="submit_btn">Voltar</button></a>
        </div>
    </div>
</div>
@endsection
