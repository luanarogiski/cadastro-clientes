
    function visualizar(id) {
        $('#modalArea').load('/client/visualizar/' + id, function() {
            $('#modalVisualizar').modal('toggle');
        });
        criarModalVisualizar();
    }

    function criarModalVisualizar() {
        $('#btnCancelar, #btnFechar').unbind('click').click(function () {
            modalVisualizar.hide();
        });
    }
