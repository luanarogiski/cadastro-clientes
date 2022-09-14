
    let inputFirstName = document.querySelector('#inputFirstName')
    let labelInputFirstName = document.querySelector('#labelInputFirstName')

    let inputLastName = document.querySelector('#inputLastName')
    let labelInputLastName = document.querySelector('#labelInputLastName')

    let inputEmail = document.querySelector('#inputEmail')
    let labelInputEmail = document.querySelector('#labelInputEmail');

    let inputPassword = document.querySelector('#inputPassword')
    let labelInputPassword = document.querySelector('#labelInputPassword')

    let inputPasswordConfirm = document.querySelector('#inputPasswordConfirm')
    let labelInputPasswordConfirm = document.querySelector('#labelInputPasswordConfirm')

    let msgError = document.querySelector('#msgError')
    let msgSuccess = document.querySelector('#msgSuccess')

    let valid = false


    // NOME
    inputFirstName.addEventListener('keyup', ()=> {
        if(inputFirstName.value.length <= 2) {
            labelInputFirstName.setAttribute('style', 'color: red')
            labelInputFirstName.innerHTML = 'Nome *Com mais de 3 letras'
            inputFirstName.setAttribute('style', 'border-color: red')
            valid = false
        } else {
            labelInputFirstName.setAttribute('style', 'color: green')
            labelInputFirstName.innerHTML = 'Nome'
            inputFirstName.setAttribute('style', 'border-color: green')
            valid = true
        }
    })

    // SOBRENOME
    inputLastName.addEventListener('keyup', ()=> {
        if(inputLastName.value.length <= 5) {
            labelInputLastName.setAttribute('style', 'color: red')
            labelInputLastName.innerHTML = 'Sobrenome *Com mais de 5 letras'
            inputLastName.setAttribute('style', 'border-color: red')
            valid = false
        } else {
            labelInputLastName.setAttribute('style', 'color: green')
            labelInputLastName.innerHTML = 'Sobrenome'
            inputLastName.setAttribute('style', 'border-color: green')
            valid = true
        }
    })

    // E-MAIL
    inputEmail.addEventListener('keyup', ()=> {
        if(validacaoEmail(inputEmail.value) === false) {
            labelInputEmail.setAttribute('style', 'color: red')
            labelInputEmail.innerHTML = '*E-mail deve ser exemplo: nome@gmail.com'
            inputEmail.setAttribute('style', 'border-color: red')
            valid = false
        } else {
            labelInputEmail.setAttribute('style', 'color: green')
            labelInputEmail.innerHTML = 'E-mail'
            inputEmail.setAttribute('style', 'border-color: green')
            valid = true
        }
    })

    function validacaoEmail(inputEmail) {
        let pattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{3})$/
        return pattern.test(inputEmail)
    }

    // SENHA
    inputPassword.addEventListener('keyup', ()=> {
        if(inputPassword.value.length < 6) {
            labelInputPassword.setAttribute('style', 'color: red')
            labelInputPassword.innerHTML = '*Senha com no mínimo de 6 caracteres'
            inputPassword.setAttribute('style', 'border-color: red')
            valid = false
        } else {
            labelInputPassword.setAttribute('style', 'color: green')
            labelInputPassword.innerHTML = 'Senha'
            inputPassword.setAttribute('style', 'border-color: green')
            valid = true
        }
    })

    // CONFIRMAÇÃO DE SENHA
    inputPasswordConfirm.addEventListener('keyup', ()=> {
        if(inputPassword.value !== inputPasswordConfirm.value) {
            labelInputPasswordConfirm.setAttribute('style', 'color: red')
            labelInputPasswordConfirm.innerHTML = '*Repetir a Senha'
            inputPasswordConfirm.setAttribute('style', 'border-color: red')
            valid = false
        } else {
            labelInputPasswordConfirm.setAttribute('style', 'color: green')
            labelInputPasswordConfirm.innerHTML = 'Senha'
            inputPasswordConfirm.setAttribute('style', 'border-color: green')
            valid = true
        }
    })

    // ICONE DE VER SENHA
    function verSenha() {
        let inputSenha = document.querySelector('#inputPassword')

        if(inputSenha.getAttribute('type') === 'password') {
            inputSenha.setAttribute('type', 'text');
            document.querySelector('#verSenha').style.display = 'none';
            document.querySelector('#ocultarSenha').style.display = 'block';
        } else {
            inputSenha.setAttribute('type', 'password')
            document.querySelector('#ocultarSenha').style.display = 'none';
            document.querySelector('#verSenha').style.display = 'block';
        }
    }

    // ICONE DE VER CONFIRMAÇÃO DE SENHA
    function verConfirmSenha() {
        let inputConfirmSenha = document.querySelector('#inputPasswordConfirm')

        if(inputConfirmSenha.getAttribute('type') === 'password') {
            inputConfirmSenha.setAttribute('type', 'text');
            document.querySelector('#verConfirmSenha').style.display = 'none';
            document.querySelector('#ocultarConfirmSenha').style.display = 'block';
        } else {
            inputConfirmSenha.setAttribute('type', 'password')
            document.querySelector('#ocultarConfirmSenha').style.display = 'none';
            document.querySelector('#verConfirmSenha').style.display = 'block';
        }
    }

    // BOTÃO CRIAR CONTA DO USUÁRIO
    function criarConta() {
        if(valid === true) {
            $( function() {
                $( "#msgSuccess" ).dialog({
                    modal: true,
                    buttons: {
                        Ok: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                });
            } );
        } else {
            $( function() {
                $( "#msgError" ).dialog({
                    modal: true,
                    buttons: {
                        Ok: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                });
            } );
        }
    }




    /*
    function criarConta() {
        if(valid === true){
           // msgSuccess.setAttribute('style', 'display: block')
          //  msgSuccess.innerHTML = '<strong>Cadastrando Usuário...</strong>'
          //  msgError.setAttribute('style', 'display: none')
           // msgError.innerHTML = ''
        alert('Cadastrando Usuário...')

    setTimeout(() => {
        window.local.href = '../login/login.js';
    }, 6000)

    } else {
        //  msgError.setAttribute('style', 'display: block')
        alert('Preencha todos os campos corretamente antes de cadastrar')
        //  msgError.innerHTML = '<strong>Preencha todos os campos corretamente antes de cadastrar</strong>'
        // msgSuccess.innerHTML = ''
        // msgSuccess.setAttribute('style', 'display: none')
    }
    }
     */
