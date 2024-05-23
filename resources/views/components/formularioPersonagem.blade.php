<div class="container_form">
    <h1>Formulário de Cadastro de personagens</h1>
    <form class="form" action="{{route('site.savePersonagem')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form_grupo">
            <label for="nome" class="form_label">Nome</label>
            <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
        </div>
        <div class="form_grupo">
            <label for="poder" class="form_label">Qual o principal poder? </label>
            <input type="text" name="poder" class="form_input" id="poder" placeholder="Poder" required>
        </div>
        <div class="form_grupo">
            <label for="message" class="form_message_label"> Digite o maior sonho do seu personagem:</label>
            <textarea name="mensagem" id="sonho" cols="30" rows="3" class="form_input message_input" required></textarea>
        </div>
        <div class="form_grupo">
            <label for="imagem" class="form_label">Imagem</label>
            <input type="file" name="imagem" class="form_input" id="imagem">
        </div>
        <div class="form_grupo">
            <input type="hidden" name="acao" value="enviar">
            <button type="submit" name="Submit" class="submit_btn">Criar</button>
        </div>
    </form>
</div>
