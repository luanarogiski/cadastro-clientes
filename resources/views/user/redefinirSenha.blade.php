<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Password Reset - SB Admin</title>
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Recuperação de Senha</h3></div>
                            <div class="card-body">
                                <div class="small mb-3 text-muted">Digite seu endereço de e-mail e enviaremos um link para redefinir sua senha.</div>
                                <form>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="nome@exemplo.com" />
                                        <label for="inputEmail">Email</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <!--    <a class="small" href="login.html">Retornar a Tela de Login</a> -->
                                        <a class="btn btn-primary" href="{{route('user.login')}}">Redefinir Senha</a>
                                    </div>
                                </form>
                            </div>
                            <!--
                            <div class="card-footer text-center py-3">
                                   <div class="small"><a href="register.html">Cadastre-se!</a></div>
                                </div>
                                -->
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
