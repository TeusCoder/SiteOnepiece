
<header class="header">
    <div class="topo">
        <span> <img id="logo" src="{{ asset('img/logo.png') }}"> </span>
    </div>    
        <div class="camposheader">
            <div>
                <a class="textoHeader" href = "{{ route('site.index') }}">Pagina Inicial</a>
            </div>
            <div>
                <a class="textoHeader" href = "{{ route('site.personagens') }}">Personagens</a>
            </div>
            <div>
                <a class="textoHeader" href = "{{ route('site.cadastrarPersonagens') }}">Cadastro de personagens</a>
            </div>
            <div>
                <a class="textoHeader" href = "{{ route('site.contato') }}">Contato</a>
            </div>
        </div>
</header>
