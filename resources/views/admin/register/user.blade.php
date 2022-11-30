<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <link href="/assets/css/custom.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    {{-- JQUERY-UI --}}
    {{--<link rel="stylesheet" href="/resources/demos/style.css">--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>



</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Criar Conta</h3></div>
                            <div class="card-body">
                                <form method="POST" id="formUsuario">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="nome" id="inputFirstName" type="text" placeholder="Nome" required/>
                                                <label id="labelInputFirstName" for="inputFirstName">Nome</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="sobrenome" id="inputLastName" type="text" placeholder="Sobrenome" required/>
                                                <label id="labelInputLastName" for="inputLastName">Sobrenome</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="dataNascimento" id="inputDataNascimento" type="text" placeholder="Data de Nascimento" required/>
                                                <label id="labelInputDataNascimento" for="inputDataNascimento">Data de Nascimento</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="rg" id="inputRG" type="text" placeholder="RG" required/>
                                                <label id="labelInputRG" for="inputRG">RG</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="cpf" id="inputCPF" type="text" placeholder="CPF" required/>
                                                <label id="labelInputCPF" for="inputCPF">CPF</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="telefone" id="inputTelefone" type="text" placeholder="Telefone" required/>
                                                <label id="labelInputTelefone" for="inputTelefone">Telefone</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="cidade" id="inputCidade" type="text" placeholder="Cidade" required/>
                                                <label id="labelInputCidade" for="inputCidade">Cidade</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="estado" id="inputEstado" type="text" placeholder="Estado" required/>
                                                <label id="labelInputEstado" for="inputEstado">Estado</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="endereco" id="inputEndereco" type="text" placeholder="Endereço" required/>
                                                <label id="labelInputEndereco" for="inputEndereco">Endereço</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email" id="inputEmail" type="email" placeholder="nome@examplo.com" onkeydown="validacaoEmail()" required/>
                                        <label id="labelInputEmail" for="inputEmail">Email</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="senha" id="inputPassword" type="password" placeholder="Criar Senha" required/>
                                                <label id="labelInputPassword" for="inputPassword">Senha</label>
                                                <i id="verSenha" class="fas fa-eye text-primary-red" onclick="verSenha()"></i>
                                                <i id="ocultarSenha" class="fas fa-eye-slash" onclick="verSenha()" style="display: none"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="confirmSenha" id="inputPasswordConfirm" type="password" placeholder="Confirmar Senha" required/>
                                                <label id="labelInputPasswordConfirm" for="inputPasswordConfirm" >Confirmação da Senha</label>
                                                <i id="verConfirmSenha" class="fas fa-eye text-primary-red" onclick="verConfirmSenha()"></i>
                                                <i id="ocultarConfirmSenha" class="fas fa-eye-slash" onclick="verConfirmSenha()" style="display: none"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="dataCadastro" id="inputDataCadastro" type="date" placeholder="Data de Cadastro" value="{{date('Y-m-d')}}" required/>
                                                <label id="labelInputDataCadastro" for="inputDataCadastro">Data do Cadastro</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><a id="btnCriarConta" class="btn btn-primary btn-block" href="#" onclick="criarConta(); return false">Criar Conta</a></div>
                                    </div>
                                    <div class="demo">
                                        <div id="msgError" title="Criar Conta">
                                            <p>Preencha todos os campos corretamente antes de cadastrar</p>
                                        </div>
                                        <div id="msgSuccess" title="Criar Conta">
                                            <p>Cadastrando Usuário...</p>
                                        </div>

                                    </div>
                                    @csrf
                                </form>
                            </div>
                            {{--
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                            </div>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2022</div>
                    <div>
                        <a href="#">Política de Privacidade</a>
                        &middot;
                        <a href="#">Termos &amp; Condições de Uso</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{"/assets/js/scripts.js"}}"></script>
<script src="{{"/assets/js/user/login.js"}}"></script>
<script src="{{"/assets/js/clientes/index.js"}}"></script>
<script src="{{"/assets/js/admin/register.js"}}"></script>

</body>
</html>
