
    $(document).ready(function () {
         datatable = $('#dataTable').DataTable({
            ajax: {
                url: '/clientes/listar',
                type: 'POST',
                data: {
                    acao: 'listar',
                    _token: csrf_token,
                    search_column: 'nome'
                }
            },

            columns: [
                {data: 'id', visible: false},
                {data: 'nome', width: '10%'},
                {data: 'dataNascimento', width: '8%'},
                {data: 'cpf', width: '7%'},
                {data: 'profissao', width: '13%'},
                {data: 'telefone', width: '5%'},
                {data: 'cidade', width: '10%'},
                {data: 'estado', width: '5%'},
                {data: 'endereco', width: '17%'},
                {data: 'dataCadastro', width: '7%'},
                {data: 'acoes', width: '15%'},
            ],

            columnDefs: [{
                targets: -1, // ultima coluna
                orderable: true, // nao é ordenavel,
                render: function (data, type, cliente, meta) { // definir a forma de renderizacao
                    return `\
                                            <a href="#" class="btn btn-sm mr-1" onclick="visualizar(${cliente.id})" title="Visualizar" data-id="${cliente.id}">\
                                              <i class="fas fa-eye text-primary"></i>\
                                            </a>\
                                            <a href="#" class="btn btn-sm mr-1" onclick="editar(${cliente.id})" title="Editar" data-id="${cliente.id}">\
                                            <i class="fas fa-edit text-info"></i>\
                                            </a>\
                                            <!--
                                            <a href="#" class="btn btn-sm mr-1" onclick="deletar()" title="Deletar" data-id="">\
                                            <i class="fas fa-trash text-danger"></i>\
                                            -->
                                    `;
                },
            }],

            serverSide: true,
            processing: true,
            responsive: true,
            searching: true,
            searchDelay: 1000,
            order: [[1, 'asc']],

         });
    });
