function load_emergencias() {
    $("#emergencias").html("<img src='img/loading/load_01.gif' width='40px'>");
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "backend/consulta_emergencias.php",
        success: function (resp) {
            $("#emergencias").html(resp);
        }
    });
}