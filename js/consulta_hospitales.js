function load_hospitales() {
    $("#hospitales").html("<img src='img/loading/load_01.gif' width='40px'>");
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "backend/consulta_hospitales.php",
        success: function (resp) {
            $("#hospitales").html(resp);
        }
    });
}