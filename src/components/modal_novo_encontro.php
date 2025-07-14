<form action="/usuario/gravar_novo_encontro" method="post" class="container">
    <div class="row">
        <div class="col-12 p-0 d-flex flex-column gap-2">
            <div class="form-floating">
                <label for="valor" class="form-label">Titulo</label>
                <input type="text" name='titulo' class="form-control">
            </div>
            <div class="form-floating">
                <label for="valor" class="form-label">Descrição</label>
                <input type="text" name='descricao' class="form-control">
            </div>
        </div>
    </div>
    <button type="submit" class="d-none btn_enviar_formulario">enviar</button>
</form>