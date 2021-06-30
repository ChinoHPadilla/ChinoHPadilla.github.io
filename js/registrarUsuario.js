function registrar_usuario() {
    let nombre = $("#inputName").val();
    let telefono = $("#inputTelefono").val();
    let email = $("#inputEmail").val();
    let pass = $("#inputPassword").val();
    let pass2 = $("#inputPassword2").val();

    //verificar la password
    if (pass != pass2) {
        alert_error("La contraseña no coincide");
        //limpiar
        $("#inputPassword").val("");
        $("#inputPassword2").val("");
    } else {
        //verifica que ningun campo este vacio
        if (email == "" || nombre == "" || telefono == "" || pass == "" || pass2 == "") {
            alert_error("No se pudieron guardar los datos");
        } else {
            $("#respuesta").html("<img src='assets/loading/load_01.gif' width='40px'>");
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "backend/registro_usuario.php",
                data: "telefono=" + telefono + "&email=" + email + "&pass=" + pass + "&pass2=" + pass2 + "&nombre=" + nombre,
                success: function (resp) {
                    alert(resp);
                    if (resp == 1) {
                        location.href = "index.php";
                    } else {
                        alert_error("No se pudieron guardar los datos");
                    }
                }
            });

        } // fin del if del campos vacios

    }//fin del if del password
}