@extends('layouts.basic')

@section('title', 'Personagens')

@section('content')
    <div class="cards1">
        <div class="cards">
            @foreach ($personagens as $personagem)
                <div class="c-card">
                    <a href="{{route('personagem.mostrar', $personagem->id)}}"><img src="{{ $personagem->imagem ? asset('storage/' . $personagem->imagem) : asset('img/default.jpg') }}"
                        alt="imagem do card"></a>
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
