function exibirModal(title, endpoint, btns) {
    let botoes = '';
    if (btns === '' || btns === 'fechar') {
        botoes = `
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
        `;
    } else if (btns === 'salvar') {
        botoes = `
            <button type="button" class="btn btn-primary">Salvar</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
        `;
    }

    $.get(endpoint, function (data) {
        $('#modal-title').html(title);
        $('#modal-content').html(data);
        // alert(botoes);
        // alert($('#modal-botoes').html());
        $('#modal-botoes').html('');
        $('#openModalBtn').click();
    });
}

$(document).ready(function () {
    $(document).on('click', '#addMeet', function () {
        exibirModal('Adicionar reunião', '/usuario/novo_encontro', '');
    });
});