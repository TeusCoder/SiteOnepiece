@extends('layouts.basic')

@section('title', 'Personagens')

@section('content')
    <div class="cards1">
        <div class="cards">
            @foreach ($personagens as $personagem)
                <div class="c-card">
                    <img src="{{ $personagem->imagem ? asset('storage/' . $personagem->imagem) : asset('img/default.jpg') }}"
                        alt="imagem do card">
                    <div class="nome"><p>Nome: {{ $personagem->nome }}</p></div>
                    <div class="poder"><p>Poder: {{ $personagem->poder }}</p></div>
                    <div class="sonho"><p>Sonho: {{ $personagem->sonho }}</p></div>
                    <div class="botoes"><a href="{{ route('personagens.edit', $personagem->id) }}" class="edit_btn">Editar</a>
                        <form action="{{ route('personagens.destroy', $personagem->id) }}" method="POST" class="delete_form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete_btn"
                                onclick="return confirm('Tem certeza que deseja excluir este personagem?')">Excluir</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
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
