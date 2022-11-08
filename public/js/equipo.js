function guardarEquipo() {
    if ((validar() == true)(confirm("¿Desea guardar el nuevo equipo?") == true)) {

        return true;
    } else
        return false;
}

function bajaEquipo() {

    if (confirm("¿Desea eliminar el equipo seleccionado?") == true) {
        return true;
    } else
        return false;
}

function actualizarEquipo($id, $nombre, $mJugados, $rFifa, $mGanados) {
    let title = document.getElementById("form-title");
    title.innerHTML = 'Actulización de EquipoController';
    $(document).ready(function() {

        $("#id").val($id);
        $("#nombre").val($nombre);
        $("#mundiales_jugados").val($mJugados);
        $("#ranking_fifa").val($rFifa);
        $("#mundiales_ganados").val($mGanados);
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


