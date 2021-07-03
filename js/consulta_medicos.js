function load_medicos() {
    $("#medicos").html("<img src='img/loading/load_01.gif' width='40px'>");
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "backend/consulta_medicos.php",
        success: function (resp) {
            $("#medicos").html(resp);
        }
    });
}