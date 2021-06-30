<?php
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id_usuario = $usuario["id"];
} else {
    $id_usuario = null;
}
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $status=0;
    
    $id_hospital = $mysqli->real_escape_string((strip_tags($_POST["hospital"], ENT_QUOTES)));
    $id_doctor = $mysqli->real_escape_string((strip_tags($_POST["doctor"], ENT_QUOTES)));
    $id_probelma = $mysqli->real_escape_string((strip_tags($_POST["probelma"], ENT_QUOTES)));
    $fecha = $mysqli->real_escape_string((strip_tags($_POST["fecha"], ENT_QUOTES)));
    $hora = $mysqli->real_escape_string((strip_tags($_POST["hora"], ENT_QUOTES)));


        if ($mysqli->connect_error){ 
            die("Se perdio la conexion, vuelve a intentarlo");
                            //error
        }else{
            /*-------------------------|| INSERTAR ||--------------------*/
            $query = "INSERT INTO `citas`(`fecha`, `hora`, `id_usuario`, `id_hospital`, `id_doctor`, `id_problema`, `visible`) VALUES (
                '$fecha','$hora','$id_usuario','$id_hospital','$id_doctor','$id_probelma',1)";
            $mysqli->query($query)or die ($mysqli->error);

            $mysqli->close(); //cierra la conexion

            $status = 1;

        }//fin del if verifica la conexion bd
    echo $status;

} //fin if method POST
?>
