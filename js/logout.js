function cerrar_session_usuario() {
    let destroy = 1;
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "backend/cerrar_session.php",
        data: "destroy=" + destroy,
        success: function (resp) {
            if (resp == 1) {
                location.href = "index.php";
            } else {
                //alert_error("No se encontro ningun registro");
            }

        }
    });
}