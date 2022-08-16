
function visualizar(id) {
    $('#modalArea').load('/visualizar/' + id, function() {
        $('#modalVisualizar').modal('toggle');
    });
}
