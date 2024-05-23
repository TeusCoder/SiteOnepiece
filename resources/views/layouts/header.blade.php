
<header class="header">
    <div class="topo">
       <a href="{{ route('site.index') }}"> <span> <img id="logo" src="{{ asset('img/logo.png') }}"> </span></a>
    </div>    
        <div class="camposheader">
            <div>
                <a class="textoHeader" href = "{{ route('site.index') }}">Pagina Inicial</a>
            </div>
            <div>
                <a class="textoHeader" href = "{{ route('site.personagens') }}">Personagens</a>
            </div>
            <div>
                <a class="textoHeader" href = "{{ route('cadastrarPersonagens.index') }}">Cadastro de personagens</a>
            </div>
            <div>
                <a class="textoHeader" href = "{{ route('site.contato') }}">Contato</a>
            </div>
        </div>
</header>
