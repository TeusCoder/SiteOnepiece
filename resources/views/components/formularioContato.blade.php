<div class="formularioContato">       
    <form action="{{route('site.contato')}}" method="post">
        @csrf
        <h1>Entre em contato</h1>
        <label>
            <span>Nome</span>
            <input type="text" name="nome" required="" placeholder="nome">
        </label>
        
        <label>
            <span> E-mail</span>
            <input type="text" name="email" class="fade_8S" placeholder="e-mail">
        </label>
        <label>
            <span> Assunto</span>
            <input type="text" name="assunto" required="" placeholder="assunto">
        </label>
        
        <label>
            <span>Mensagem</span>
             <input type="text" name="mensagem" rows="3" required="" placeholder="Deixe sua mensagem.."> 
        </label>
       
        <input type="hidden" name="acao" value="enviar" />
        <button class="btn-envia" title="Enviar"><b class="icon icon-paper-plane-o"> Enviar</b></button>
    </form>
</div>