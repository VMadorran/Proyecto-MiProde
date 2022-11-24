
function onLocalChange(){
    let value = document.getElementById("local").value;
    console.log(value)

    $.post(
        "create-partido/findAllVisitantes'",
        { equipos: value },
        function(data){
            console.log(data);
            $('#visitante').html(data);
        }
    );
   // location.href='createFase';
}

function guardarPartido() {
    if ((validar() == true)(confirm("¿Desea guardar el nuevo partido?") == true)) {

        return true;
    } else
        return false;
}

function deletePartido() {

    if (confirm("¿Desea eliminar el partido seleccionado?") == true) {
        return true;
    } else
        return false;
}

function actualizarPartido($id, $fecha, $hora, $local, $visitante) {
    let title = document.getElementById("form-title");
    title.innerHTML = 'Actulización de Partido';
    console.log($local);
    console.log($visitante);
    $(document).ready(function() {

        $("#id").val($id);
        $("#fecha").val($fecha);
        $("#hora").val($hora);
        document.getElementById($local).selected = true;
        document.getElementById($visitante).selected = true;
        $("#modal-default").modal('show');
    });
}

function validar() {
    let x = document.getElementById("formulario-partido");
    let i;
    let validos = true;
    for (i = 0; i < x.length; i++) {
        if (x.elements[i].value == "") {
            validos = false;
        }

    }
    return validos;
}


