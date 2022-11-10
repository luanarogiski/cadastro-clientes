    @include('layout.header')

    @include('clientes.sidenavTables')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-2">Cadastrar Clientes - Seja bem-vindo
                </h1>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="dataTable" class="table" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Data de Nascimento</th>
                                        <th>CPF</th>
                                        <th>Profissão</th>
                                        <th>Telefone</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th>Endereço</th>
                                        <th>Data do Cadastro</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="{{"/assets/js/clientes/index.js"}}"></script>
        <script src="{{"/assets/js/clientes/adicionar.js"}}"></script>
        <script src="{{"/assets/js/clientes/editar.js"}}"></script>
        <script src="{{"/assets/js/clientes/visualizar.js"}}"></script>



    @include('layout.footer')



