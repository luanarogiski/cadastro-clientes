
function editar(id) {
    $('#modalArea').load('/editar/' + id, function() {
        $('#modalEditar').modal('toggle');
    });
}
