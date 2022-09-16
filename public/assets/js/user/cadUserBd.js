// CADASTRAR USUARIO NO BD
const formUsuario = document.getElementById('formUsuario')
if (formUsuario) {
    formUsuario.addEventListener(criarConta(), async (e) => {
        e.preventDefault()

        // RECEBER OS DADOS DO FORM
        const dadosForm = new FormData(formUsuario)

        // ENVIAR OS DADOS PARA O ARQUIVO 'cadastrar.php', DEVE SALVAR NO BD
        const dados = await fetch('cadastrar.php', {
            method: 'POST',
            body: dadosForm
        })
    })
}
