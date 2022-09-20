
    function adicionar() {
        $('#modalArea').load('/clientes/adicionar', function() {
            $('#modalAdicionar').modal('toggle');
            criarModalAdicionar();
        });
    }

    function criarModalAdicionar() {
        // $('#formAdicionar')[0].reset();
        $('#btnCancelar, #btnFechar').unbind('click').click(function () {
            $('#modalAdicionar').modal('hide');
        });


        $('#btnSalvar').unbind('click').click(function () {
            $.ajax({
                type: 'POST',
                url: '/clientes/adicionar',
                data: new FormData(document.querySelector('#formAdicionar')),
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (resposta) {
                    alert(resposta.mensagem);

                    // Apos salvar recarregar o Grid
                    datatable.draw();
                    $('#modalAdicionar').load('/clientes/adicionar #modalAdicionar > div');
                }
            });
            $('#modalAdicionar').modal('hide');
        });

    }

