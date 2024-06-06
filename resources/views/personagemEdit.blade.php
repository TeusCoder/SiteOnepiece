@extends('layouts.basic')

@section('content')
<div class="container">
    <div class="container_form">
        <h1>Editar Personagem</h1>
        <form class="form" action="{{ route('personagens.update', $personagem->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form_grupo">
                <label for="nome" class="form_label">Nome</label>
                <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" value="{{ $personagem->nome }}" required>
            </div>
            <div class="form_grupo">
                <label for="poder" class="form_label">Qual o principal poder?</label>
                <input type="text" name="poder" class="form_input" id="poder" placeholder="Poder" value="{{ $personagem->poder }}" required>
            </div>
            <div class="form_grupo">
                <label for="sonho" class="form_message_label">Digite o maior sonho do seu personagem:</label>
                <textarea name="sonho" id="sonho" cols="30" rows="3" class="form_input message_input" required>{{ $personagem->sonho }}</textarea>
            </div>
            <div class="form_grupo">
                <label for="imagem" class="form_label">Imagem</label>
                <input type="file" name="imagem" class="form_input" id="imagem">
                @if ($personagem->imagem)
                    <img src="{{ asset('storage/' . $personagem->imagem) }}" alt="imagem atual" width="100">
                @endif
            </div>
            <div class="form_grupo">
                <button type="submit" name="Submit" class="submit_btn">Confirmar</button>
            </div>
        </form>
    </div>
</div>
@endsection