
    <!-- LINKS CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <link href="/assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />

    <!-- LINKS FONTS -->
    <link href="https://fontawesome.com/icons/arrow-right-from-bracket?s=solid" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- SCRIPTS JQUERY -->
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="{{"/assets/js/jquery/jquery.min.js"}}"></script>
    <script src="{{"/assets/js/jquery/jquery.easing.min.js"}}"></script>
    <script src="{{"/assets/js/jquery/bootstrap.bundle.min.js"}}"></script>

    <main>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tabela de Usuários
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <table id="dataTable" class="table" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Data de Nascimento</th>
                            <th>RG</th>
                            <th>CPF</th>
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
    </main>

    <script src="{{"/assets/js/admin/acessar/users.js"}}"></script>
    <script src="{{"/assets/js/admin/register/user.js"}}"></script>


@include('admin.layout.footer')
