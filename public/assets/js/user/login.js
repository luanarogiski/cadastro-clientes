
    let inputLoginEmail = document.querySelector('#inputLoginEmail')
    let labelLoginEmail = document.querySelector('#labelLoginEmail');

    let inputLoginPassword = document.querySelector('#inputLoginPassword')
    let labelLoginPassword = document.querySelector('#labelLoginPassword')

    let btnEntrar = document.querySelector('#btnEntrar')

    function verSenhaLogin() {

            let inputLoginPassword = document.querySelector('#inputLoginPassword')

            if(inputLoginPassword.getAttribute('type') === 'password') {
                inputLoginPassword.setAttribute('type', 'text');
                document.querySelector('#verSenhaLogin').style.display = 'none';
                document.querySelector('#ocultarSenhaLogin').style.display = 'block';
            } else {
                inputLoginPassword.setAttribute('type', 'password')
                document.querySelector('#ocultarSenhaLogin').style.display = 'none';
                document.querySelector('#verSenhaLogin').style.display = 'block';
            }
    }

    function entrar() {

        $.ajax({
            type: 'POST',
            url: '/login',
            data: new FormData(document.querySelector('#formLogin')),
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (resposta) {
                alert(resposta.mensagem);

                if (resposta.sucesso) {
                    window.location.href = resposta.admin ? '/admin' : '/clientes';
                    // if (resposta.admin) {
                    //     window.location.href = '/admin';
                    // } else {
                    //     window.location.href = '/clientes';
                    // }
                } else {
                    document.getElementById('inputLoginPassword').value = '';
                }
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }
        });
    }

    /*
    function cadastrar() {

        $.ajax({
            type: 'POST',
            url: '/register',
            data: new FormData(document.querySelector('#formUsuario')),
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (resposta) {
                alert(resposta.mensagem);

                if (resposta.sucesso) {
                    window.location.href = '/clientes';
                } else {
                    document.getElementById('inputLoginPassword').value = '';
                }
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }
        });


    } */

