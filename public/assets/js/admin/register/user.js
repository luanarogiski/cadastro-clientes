
let inputFirstName = document.querySelector('#inputFirstName')
let labelInputFirstName = document.querySelector('#labelInputFirstName')

let inputLastName = document.querySelector('#inputLastName')
let labelInputLastName = document.querySelector('#labelInputLastName')

let inputDataNascimento = document.querySelector('#inputDataNascimento')
let labelInputDataNascimento = document.querySelector('#labelInputDataNascimento')

let inputRG = document.querySelector('#inputRG')
let labelInputRG = document.querySelector('#labelInputRG')

let inputCPF = document.querySelector('#inputCPF')
let labelInputCPF = document.querySelector('#labelInputCPF')

let inputTelefone = document.querySelector('#inputTelefone')
let labelInputTelefone = document.querySelector('#labelInputTelefone')

let inputCidade = document.querySelector('#inputCidade')
let labelInputCidade = document.querySelector('#labelInputCidade')

let inputEstado = document.querySelector('#inputEstado')
let labelInputEstado = document.querySelector('#labelInputEstado')

let inputEndereco = document.querySelector('#inputEndereco')
let labelInputEndereco = document.querySelector('#labelInputEndereco')

let inputEmail = document.querySelector('#inputEmail')
let labelInputEmail = document.querySelector('#labelInputEmail');

let inputPassword = document.querySelector('#inputPassword')
let labelInputPassword = document.querySelector('#labelInputPassword')

let inputPasswordConfirm = document.querySelector('#inputPasswordConfirm')
let labelInputPasswordConfirm = document.querySelector('#labelInputPasswordConfirm')

let inputDataCadastro = document.querySelector('#inputDataCadastro')
let labelInputDataCadastro = document.querySelector('#labelInputDataCadastro')

let btnCriarConta = document.querySelector('#btnCriarConta')

//let msgError = document.querySelector('#msgError')
//let msgSuccess = document.querySelector('#msgSuccess')

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

// DATA NASCIMENTO
inputDataNascimento.addEventListener('keyup', ()=> {
    if(inputDataNascimento.value.length <= 7) {
        labelInputDataNascimento.setAttribute('style', 'color: red')
        labelInputDataNascimento.innerHTML = 'Data de Nascimento'
        inputDataNascimento.setAttribute('style', 'border-color: red')
        valid = false
    } else {
        labelInputDataNascimento.setAttribute('style', 'color: green')
        labelInputDataNascimento.innerHTML = 'Data de Nascimento'
        inputDataNascimento.setAttribute('style', 'border-color: green')
        valid = true
    }
})

// RG
inputRG.addEventListener('keyup', ()=> {
    if(inputRG.value.length <= 8) {
        labelInputRG.setAttribute('style', 'color: red')
        labelInputRG.innerHTML = 'RG *Com mais de 8 dígitos'
        inputRG.setAttribute('style', 'border-color: red')
        valid = false
    } else {
        labelInputRG.setAttribute('style', 'color: green')
        labelInputRG.innerHTML = 'RG'
        inputRG.setAttribute('style', 'border-color: green')
        valid = true
    }
})

// CPF
inputCPF.addEventListener('keyup', ()=> {
    if(inputCPF.value.length <= 10) {
        labelInputCPF.setAttribute('style', 'color: red')
        labelInputCPF.innerHTML = 'CPF *Com mais de 10 dígitos'
        inputCPF.setAttribute('style', 'border-color: red')
        valid = false
    } else {
        labelInputCPF.setAttribute('style', 'color: green')
        labelInputCPF.innerHTML = 'CPF'
        inputCPF.setAttribute('style', 'border-color: green')
        valid = true
    }
})

// TELEFONE
inputTelefone.addEventListener('keyup', ()=> {
    if(inputTelefone.value.length <= 10) {
        labelInputTelefone.setAttribute('style', 'color: red')
        labelInputTelefone.innerHTML = 'Telefone *Com mais de 10 dígitos'
        inputTelefone.setAttribute('style', 'border-color: red')
        valid = false
    } else {
        labelInputTelefone.setAttribute('style', 'color: green')
        labelInputTelefone.innerHTML = 'Telefone'
        inputTelefone.setAttribute('style', 'border-color: green')
        valid = true
    }
})

// CIDADE
inputCidade.addEventListener('keyup', ()=> {
    if(inputCidade.value.length <= 2) {
        labelInputCidade.setAttribute('style', 'color: red')
        labelInputCidade.innerHTML = 'Cidade *Com mais de 2 letras'
        inputCidade.setAttribute('style', 'border-color: red')
        valid = false
    } else {
        labelInputCidade.setAttribute('style', 'color: green')
        labelInputCidade.innerHTML = 'Cidade'
        inputCidade.setAttribute('style', 'border-color: green')
        valid = true
    }
})

// ESTADO
inputEstado.addEventListener('keyup', ()=> {
    if(inputEstado.value.length <= 1) {
        labelInputEstado.setAttribute('style', 'color: red')
        labelInputEstado.innerHTML = 'Estado *Com mais de 1 letra'
        inputEstado.setAttribute('style', 'border-color: red')
        valid = false
    } else {
        labelInputEstado.setAttribute('style', 'color: green')
        labelInputEstado.innerHTML = 'Estado'
        inputEstado.setAttribute('style', 'border-color: green')
        valid = true
    }
})

// ENDEREÇO
inputEndereco.addEventListener('keyup', ()=> {
    if(inputEndereco.value.length <= 5) {
        labelInputEndereco.setAttribute('style', 'color: red')
        labelInputEndereco.innerHTML = 'Endereço *Com mais de 5 letras'
        inputEndereco.setAttribute('style', 'border-color: red')
        valid = false
    } else {
        labelInputEndereco.setAttribute('style', 'color: green')
        labelInputEndereco.innerHTML = 'Endereço'
        inputEndereco.setAttribute('style', 'border-color: green')
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

// VALIDAÇÃO DE EMAIL COM O REGEX
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

// DATA DE CADASTRO
inputDataCadastro.addEventListener('keyup', ()=> {
    if(inputDataCadastro.value.length < 7) {
        labelInputDataCadastro.setAttribute('style', 'color: red')
        labelInputDataCadastro.innerHTML = 'Data de Cadastro *Com mais de 5 dígitos'
        inputDataCadastro.setAttribute('style', 'border-color: red')
        valid = false
    } else {
        labelInputDataCadastro.setAttribute('style', 'color: green')
        labelInputDataCadastro.innerHTML = 'Data de Cadastro'
        inputDataCadastro.setAttribute('style', 'border-color: green')
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
    if (valid) {
        registrarNovaConta();
    } else {
        $(function () {
            $("#msgError").dialog({
                modal: true,
                buttons: {
                    Ok: function () {
                        $(this).dialog("close");
                    }
                }
            });
        });
    }
}

function registrarNovaConta()
{
    let dados = new FormData(document.getElementById('formUsuario'));

    $.ajax({
        url: '/register/user',
        type: "POST",
        data: dados,
        processData: false,
        cache: false,
        contentType: false,
        success: function( data ) {
            $("#msgSuccess").dialog({
                modal: true,
                buttons: {
                    Ok: function () {
                        if ($(this).dialog("close")) {
                            window.location.href = '/login'
                        }
                    }
                },
            });
        },
        error: function (request, status, error) {
            console.log(request);
            let msg = error;
            if (typeof request.responseJSON.message != 'undefined') {
                msg = request.responseJSON.message;
            }
            $("#msgError > p").text('Erro ao enviar os dados ao servidor: ' + msg);
            $("#msgError").dialog({
                modal: true,
                buttons: {
                    Ok: function () {
                        $(this).dialog("close");
                    }
                }
            });
        }
    });
}




