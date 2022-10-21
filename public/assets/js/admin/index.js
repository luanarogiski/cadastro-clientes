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
                window.location.href = '/register';
            } else {
                document.getElementById('inputLoginPassword').value = '';
            }
        },
        error: function (request, status, error) {
            alert(request.responseText);
        }
    });
}
