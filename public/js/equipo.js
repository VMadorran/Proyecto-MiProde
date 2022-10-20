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

function actualizarEquipo($data) {
    console.log($data)
    let title = document.getElementById("form-title");
    title.innerHTML = 'Actulización de Equipo';
    $(document).ready(function() {
       // $("#id").val(data); acá iría data.id
        $("#nombre").val('Editado');
        $("#mundiales_jugados").val(9);
        $("#rancking_fifa").val(10);
        $("#mundiales_ganados").val(12);
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


