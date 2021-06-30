function agendarCita() {

    let hospital = $("#selectHospital").val();
    let doctor = $("#selectDoctor").val();
    let probelma = $("#selectProblema").val();
    let fecha = $("#inputFecha").val();
    let hora = $("#inputHora").val();

    //verifica que ningun campo este vacio
    if (hospital == 0 || doctor == 0 || probelma == 0 || fecha == "" || hora == "") {
        alert_error("No se pudieron guardar los datos");
    } else {
        $("#respuesta").html("<img src='assets/loading/load_01.gif' width='40px'>");
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "backend/registro_cita.php",
            data: "hospital=" + hospital + "&doctor=" + doctor + "&probelma=" + probelma + "&fecha=" + fecha + "&hora=" + hora,
            success: function (resp) {
                if (resp == 1) {
                    location.href = "citas_medicas.php";
                } else {
                    alert_error("No se pudieron guardar los datos");
                }
            }
        });

    } // fin del if del campos vacios


}