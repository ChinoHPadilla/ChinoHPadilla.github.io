function cancelarCita(id_cita) {

    //verifica que ningun campo este vacio
    if (id_cita == 0 || id_cita == "" || id_cita == null) {
        alert_error("No se pudieron guardar los datos");
    } else {
        $("#respuesta").html("<img src='assets/loading/load_01.gif' width='40px'>");
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "backend/cancelar_cita.php",
            data: "id_cita=" + id_cita,
            success: function (resp) {
                if (resp == 1) {
                    location.href = "citas_medicas.php";
                } else {
                    alert_error("No se pudieron eliminar los datos");
                }
            }
        });

    } // fin del if del campos vacios


}