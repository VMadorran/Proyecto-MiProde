function guardarUsuario() {
    if ((validar() == true)(confirm("¿Desea guardar el nuevo usuario?") == true)) {

        return true;
    } else
        return false;
}

function bajaUsuario() {

    if (confirm("¿Desea eliminar el usuario seleccionado?") == true) {
        return true;
    } else
        return false;
}

function actualizarUsuario($id, $nombre_usuario, $contraseña, $dni, $nombre, $apellido, $email, $fecha_nac) {
    let title = document.getElementById("form-title");
    title.innerHTML = 'Actulización de Usuario';
    $(document).ready(function() {

        $("#id").val($id);
        $("#nombre_usuario").val($nombre_usuario);
        $("#contraseña").val($contraseña);
        $("#dni").val($dni);
        $("#nombre").val($nombre);
        $("#apellido").val($apellido);
        $("#email").val($email);
        $("#fecha_nac").val($fecha_nac);
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


