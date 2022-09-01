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
                                    <form>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Nome" />
                                                    <label for="inputFirstName">Nome</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Sobrenome" />
                                                    <label for="inputLastName">Sobrenome</label>
                                                </div>
                                            </div>
                                            {{--
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputRg" type="text" placeholder="RG" />
                                                    <label for="inputRg">RG</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputCpf" type="text" placeholder="CPF" />
                                                    <label for="inputCpf">CPF</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputContato" type="text" placeholder="Número de Telefone" />
                                                    <label for="inputContato">Telefone</label>
                                                </div>
                                            </div>
                                            --}}
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" placeholder="nome@examplo.com" />
                                            <label for="inputEmail">Email</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Criar Senha" />
                                                    <label for="inputPassword">Senha</label>
                                                    <i id="verSenha" class="fas fa-eye text-primary-red" onclick="verSenha()"></i>
                                                    <i id="ocultarSenha" class="fas fa-eye-slash" onclick="verSenha()" style="display: none"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirmar Senha" />
                                                    <label for="inputPasswordConfirm" >Confirmação da Senha</label>
                                                    <i id="verConfirmSenha" class="fas fa-eye text-primary-red" onclick="verConfirmSenha()"></i>
                                                    <i id="ocultarConfirmSenha" class="fas fa-eye-slash" onclick="verConfirmSenha()" style="display: none"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><a class="btn btn-primary btn-block" href="/login">Criar Conta</a></div>
                                        </div>
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
    <script src="/assets/js/scripts.js"></script>
    <script src="{{"/assets/js/user/register.js"}}"></script>
    </body>
    </html>
