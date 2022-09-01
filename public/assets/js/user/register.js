

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
