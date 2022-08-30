
    function adicionar() {
        $('#modalArea').load('/client/adicionar', function() {
            $('#modalAdicionar').modal('toggle');
            criarModalAdicionar();
        });
    }

    function criarModalAdicionar() {
        // $('#formAdicionar')[0].reset();
        $('#btnCancelar, #btnFechar').unbind('click').click(function () {
            modalAdicionar.hide();
        });


        $('#btnSalvar').unbind('click').click(function () {
            $.ajax({
                type: 'POST',
                url: '/client/adicionar',
                data: new FormData(document.querySelector('#formAdicionar')),
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (resposta) {
                    alert(resposta.mensagem);

                    // Apos salvar recarregar o Grid
                    datatable.draw();
                    $('#modalAdicionar').load('/client/adicionar #modalAdicionar > div');
                }
            });
            modalAdicionar.hide();
        });

    }

