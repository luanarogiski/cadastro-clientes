
    function visualizar(id) {
        $('#modalArea').load('/clientes/visualizar/' + id, function() {
            $('#modalVisualizar').modal('toggle');
        });
        criarModalVisualizar();
    }

    function criarModalVisualizar() {
        $('#btnCancelar, #btnFechar').unbind('click').click(function () {
            $('#modalVisualizar').modal('hide');
        });
    }
