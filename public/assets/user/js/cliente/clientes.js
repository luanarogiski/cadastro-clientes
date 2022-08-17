    $(document).ready(function() {
        datatable = $('#dataTable').DataTable({
            ajax: {
                url: '/client/listar',
                type: 'POST',
                data: {
                    acao: 'listar',
                    _token: csrf_token,
                    search_column: 'nome'
                }
            },

            columns: [
                {data: 'id', visible:false},
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

            columnDefs: [{
                targets: -1, // ultima coluna
                orderable: false, // nao é ordenavel
                render: function (data, type, clientes, meta) { // definir a forma de renderizacao
                    return `\
                            <a href="/client/listar" target="_blank" class="btn btn-sm mr-1" title="Visualizar" data-id="${clientes.id}">\
                              <i class="fas fa-eye text-primary"></i>\
                            </a>\
                            <a href="#" class="btn btn-sm mr-1" onclick="editar(${meta.row})" title="Editar" data-id="${clientes.id}">\
                            \<i class="fas fa-edit text-info"></i>\
                            </a>\
                            \<a href="#" class="btn btn-sm mr-1" onclick="deletar(${clientes.id})"\
                                title="Deletar" data-id="${clientes.id}">\
                                <i class="fas fa-trash text-danger"></i>\
                    `;
                },
            }],

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

