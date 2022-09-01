

function verSenhaLogin() {

        let inputPasswordLogin = document.querySelector('#inputLoginPassword')

        if(inputPasswordLogin.getAttribute('type') === 'password') {
            inputPasswordLogin.setAttribute('type', 'text');
            document.querySelector('#verSenhaLogin').style.display = 'none';
            document.querySelector('#ocultarSenhaLogin').style.display = 'block';
        } else {
            inputPasswordLogin.setAttribute('type', 'password')
            document.querySelector('#ocultarSenhaLogin').style.display = 'none';
            document.querySelector('#verSenhaLogin').style.display = 'block';
        }
}


