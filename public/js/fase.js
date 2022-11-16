
function guardarFase() {
    if ((validar() == true)(confirm("¿Desea guardar la nueva fase?") == true)) {
        return true;
    } else
        return false;
}

function bajaFase() {
    if (confirm("¿Desea eliminar la fase selccionada?") == true) {
        return true;
    } else
        return false;
}

function actualizarFase($id, $nombre, $fechaI, $fechaF) {

    let title = document.getElementById("form-title");
    title.innerHTML = 'Actulización de Fase';
    $(document).ready(function() {
        $("#id_fase").val($id);
        $("#nombre").val($nombre);
        $("#fecha_inicio").val($fechaI);
        $("#fecha_fin").val($fechaF);
        $("#modal-default").modal('show');
    });
}

function validar() {
    let x = document.getElementById("formulario");
    let i;
    let validos = true;
    for (i = 0; i < x.length; i++) {
        if (x.elements[i].value == "") {
            validos = false;
        }
    }
    return validos;
}


