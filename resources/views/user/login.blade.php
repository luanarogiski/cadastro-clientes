    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="/assets/css/styles.css" rel="stylesheet" />
        <link href="/assets/css/custom.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="{{"/assets/js/jquery/jquery.min.js"}}"></script>
    </head>
    <body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Acessar</h3></div>
                                <div class="card-body">
                                    <form id="formLogin" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" id="inputLoginEmail" type="email" placeholder="nome@exemplo.com" required/>
                                            <label id="labelLoginEmail" for="labelLoginEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="password" name="senha" id="inputLoginPassword" placeholder="Senha" required/>
                                            <label id="labelLoginPassword" for="labelLoginPassword">Senha</label>
                                            <i id="verSenhaLogin" class="fas fa-eye text-primary-red" onclick="verSenhaLogin()"></i>
                                            <i id="ocultarSenhaLogin" class="fas fa-eye-slash" onclick="verSenhaLogin()" style="display: none"></i>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" required/>
                                            <label class="form-check-label" for="inputRememberPassword">Lembrar-me da Senha</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="/redefinirSenha">Esqueceu a Senha?</a>
                                            <a id="btnEntrar" class="btn btn-primary" href="" onclick="entrar(); return false">Entrar</a>
                                        </div>
                                        @csrf
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <a class="btn btn-secondary" href="/register">Cadastre-se</a>
                                   <!-- <div class="small"><a href="register.html">Cadastre-se</a></div> -->
                                </div>
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
    <script src="/assets/js/user/login.js"></script>
    <script src="/assets/js/admin/register.js"></script>
    </body>
    </html>
