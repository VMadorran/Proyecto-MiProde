function guardarTorneo() {
    if ((validar() == true)(confirm("¿Desea guardar el nuevo torneo?") == true)) {

        return true;
    } else
        return false;
}

function bajaTorneo() {

    if (confirm("¿Desea eliminar el toeneo seleccionado?") == true) {
        return true;
    } else
        return false;
}

function actualizarTorneo($id, $nombre, $fechaI, $fechaF) {
    let title = document.getElementById("form-title");
    title.innerHTML = 'Actulización de Torneo';
    $(document).ready(function() {

        $("#id").val($id);
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


