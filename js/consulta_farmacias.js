function load_farmacias() {
    $("#farmacias").html("<img src='img/loading/load_01.gif' width='40px'>");
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "backend/consulta_farmacias.php",
        success: function (resp) {
            $("#farmacias").html(resp);
        }
    });
}