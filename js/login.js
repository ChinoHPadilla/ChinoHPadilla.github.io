function logear() {
    let email = $("#inputEmail").val();
    let pass = $("#inputPassword").val();

    //verifica que ningun campo este vacio
    if (email == "" || pass == "") {
        alert_error("No se encontro ningun registro");
    } else {

        $.ajax({
            type: "POST",
            dataType: "html",
            url: "backend/validacion_usuario.php",
            data: "email=" + email + "&pass=" + pass,
            success: function (resp) {
                if (resp == 1) {
                    location.href = "index.php";
                } else {
                    alert_error("No se encontro ningun registro");
                }
            }
        });

    } // fin del if del campos vacios
}