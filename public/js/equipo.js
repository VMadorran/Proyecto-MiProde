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


