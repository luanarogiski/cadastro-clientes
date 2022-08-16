    $(document).ready(function() {
        datatable = $('#dataTable').DataTable({
            ajax: {
                url: '/client/clientes',
                type: 'POST',
                data: {
                    acao: 'listar',
                    _token: csrf_token,
                    search_column: 'nome'
                }
            },

            columns: [
                {data: 'id', width:'5%', visible:false},
                {data: 'nome', width: '10%'},
                {data: 'dataNascimento', width: '10%'},
                {data: 'cpf', width: '10%'},
                {data: 'profissao', width: '10%'},
                {data: 'telefone', width: '10%'},
                {data: 'cidade', width: '5%'},
                {data: 'endereco', width: '10%'},
                {data: 'dataCadastro', width: '10%'},
                {data: 'dataCompra', width: '10%'},
                {data: 'acoes', width: '10%'},
            ],

            serverSide: true,
            processing: true,
            responsive: true,
            searching: true,
            seachDelay: 1000,
            order: [[9, 'desc']],
        });
    });

    function adicionar() {
        $('#modalArea').load('/adicionar', function() {
            $('#modalAdicionarEditar').modal('toggle');
            criarModalAdicionar();
        });
        alert("Error");
    }

    function criarModalAdicionar() {
        $('#formAdicionarEditar')[0].reset();
        $('#btnCancelar, #btnFechar').unbind('click').click(function () {
            modalAdicionarEditar.hide();
        });


        $('#btnSalvar').unbind('click').click(function () {
            $.ajax({
                type: 'POST',
                url: '/adicionar',
                data: new FormData(document.querySelector('#formAdicionarEditar')),
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (resposta) {
                    alert(resposta.mensagem);

                    // Apos salvar recarregar o Grid
                    datatable.draw();
                    $('#modalAdicionarEditar').load('/adicionar #modalAdicionarEditar > div');
                }
            });
            modalAdicionarEditar.hide();
        });

    }

