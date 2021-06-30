function load_citasMedicas() {
    $("#citasMedicas").html("<img src='img/loading/load_01.gif' width='40px'>");
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "backend/consulta_citas_medicas.php",
        success: function (resp) {
            $("#citasMedicas").html(resp);
        }
    });
}