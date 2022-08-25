

    function editar(id) {
        $('#modalArea').load('/client/editar/' + id, function() {
            $('#modalEditar').modal('toggle');
            criarModalEditar();
        });
    }

    function criarModalEditar() {
        // $('#formEditar')[0].reset();
        $('#btnCancelar, #btnFechar').unbind('click').click(function () {
            modalEditar.hide();
        });


        $('#btnSalvar').unbind('click').click(function () {
            $.ajax({
                type: 'POST',
                url: '/client/editar',
                data: new FormData(document.querySelector('#formEditar')),
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (resposta) {
                    alert(resposta.mensagem);

                    // Apos salvar recarregar o Grid
                    datatable.draw();
                    $('#modalEditar').load('/client/editar #modalEditar > div');
                },
                error: function (request, status, error) {
                    alert(request.responseText);
                }
            });
            modalEditar.hide();
        });
        modalEditar = new bootstrap.Modal(document.getElementById('modalEditar'), {});
        modalEditar.toggle();
    }
