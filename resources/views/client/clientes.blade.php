 @include('layout.header')

 @include('client.sidenavTables')

                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-2">Cadastrar Clientes</h1>

                            <div class="adicionar">
                                <a href="#" onclick="adicionar()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Adicionar Novo Cliente <i class="fas fa-plus"></i></a>
                            </div>
                            <ol class="breadcrumb mb-4">
                                <!--  <li class="breadcrumb-item active">Dashboard</li> -->
                            </ol>


                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Tabela de Cadastro de Clientes
                                </div>
                                <div class="card-body">
                                    <table id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Data de Nascimento</th>
                                            <th>CPF</th>
                                            <th>Profissão</th>
                                            <th>Telefone</th>
                                            <th>Cidade</th>
                                            <th>Endereço</th>
                                            <th>Data do Cadastro</th>
                                            <th>Data de Compra</th>
                                            <th>Ações</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </main>

                    <div class="modal fade" id="modalAdicionarEditar" tabindex="-1" aria-labelledby="modalAdicionarEditarLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalAdicionarEditarTitle">Adicionar</h5>
                                    <a href="#" id="btnFechar" class="text-secondary" data-bs-dismiss="modal"> <span class="material-symbols-outlined">close</span></a>
                                </div>
                                <div class="modal-body">
                                    <form id="formAdicionarEditar">
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input type="text" name="id" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                            <label>Data de Nascimento</label>
                                            <input type="date" name="dataNascimento" class="form-control" placeholder="Data de Nascimento">
                                        </div>
                                        <div class="form-group">
                                            <label>CPF</label>
                                            <input type="text" name="cpf" class="form-control" placeholder="Número do CPF">
                                        </div>
                                        <div class="form-group">
                                            <label>Profissão</label>
                                            <input type="text" name="profissao" class="form-control" placeholder="Profissão">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input type="text" name="telefone" class="form-control" placeholder="Número do Telefone">
                                        </div>
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                                        </div>
                                        <div class="form-group">
                                            <label>Endereço</label>
                                            <input type="text" name="endereco" class="form-control" placeholder="Endereço">
                                        </div>
                                        <div class="form-group">
                                            <label>Data do Cadastro</label>
                                            <input type="date" name="dataCadastro" class="form-control" placeholder="Data do Cadastro">
                                        </div>
                                        <div class="form-group">
                                            <label>Data da Compra</label>
                                            <input type="date" name="dataCompra" class="form-control" placeholder="Data da Compra">
                                        </div>
                                        <input type="hidden" name="acao">
                                        <input type="hidden" name="id">
                                        @csrf
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="btnCancelar" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" id="btnSalvar" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script src="{{"/assets/user/js/cliente/clientes.js"}}"></script>
                    <script src="{{"/assets/user/js/acoes/adicionar.js"}}"></script>
                    <script src="{{"/assets/user/js/acoes/editar.js"}}"></script>
                    <script src="{{"/assets/user/js/acoes/visualizar.js"}}"></script>


    @include('layout.footer')


                <!--    <script>
                    /*    function adicionar() {
                            $('#modalArea').load('/adicionar', function() {
                                $('#modalAdicionar').modal('toggle');
                            });
                        }

                        function editar(id) {
                            $('#modalArea').load('/editar/' + id, function() {
                                $('#modalEditar').modal('toggle');
                            });
                        }*/
                    </script> -->