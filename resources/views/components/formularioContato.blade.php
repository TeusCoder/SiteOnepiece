<div class="formularioContato">       
    <form action="{{route('site.contato')}}" method="post">
        @csrf
        <h2>Entre em contato</h2>
        <label>
            <span><i class="icon icon-user-1"></i> Nome</span>
            <input type="text" name="nome" required="">
        </label>
        
        <label>
            <span><i class="icon icon-email"></i> E-mail</span>
            <input type="text" name="email" class="fade_8S">
        </label>
        <label>
            <span><i class="icon icon-flag"></i> Assunto</span>
            <input type="text" name="assunto" required="">
        </label>
        
        <label>
            <span><i class="icon icon-comment"></i> Mensagem</span>
             <textarea name="mensagem" rows="3" required=""></textarea> 
        </label>
       
        <input type="hidden" name="acao" value="enviar" />
        <button class="btn-envia" title="Enviar"><b class="icon icon-paper-plane-o"> Enviar</b></button>
    </form>
</div>