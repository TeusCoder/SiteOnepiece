


<div class="container">
    <div class="container_form">
        <h1>Entre em contato</h1>
        <form class="form" action="{{route('site.contato')}}" method="post">
            @csrf
            <div class="form_grupo">
                <label for="nome" class="form_label">Nome</label>
                <input type="text"  class="form_input" name="nome" required="" placeholder="nome">
            </div>
            <div class="form_grupo">
                <label for="email" class="form_label">E-mail</label>
                <input type="text"  class="form_input" name="email" placeholder="e-mail">
            </div>
            <div class="form_grupo">
                <label for="assunto" class="form_label">Assunto</label>
                <input type="text"  class="form_input" name="assunto" required placeholder="assunto">
            </div>
            <div class="form_grupo">
                <label for="mensagem" class="form_label">Mensagem</label>
                <input type="text"  class="form_input" name="mensagem" rows="3" required="" placeholder="Deixe sua mensagem...">
            </div>
            <div class="form_grupo">
                <input type="hidden" name="acao" value="enviar">
                <button type="submit" name="Submit" class="submit_btn" onclick="return redirect()->route('site.personagens')">Enviar</button>
            </div>
        </form>
    </div>
</div>