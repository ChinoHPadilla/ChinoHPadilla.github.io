<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $status=0;

        if(!empty($_POST["id_cita"])){
            $id_cita = $mysqli->real_escape_string((strip_tags($_POST["id_cita"], ENT_QUOTES)));
        }

            if ($mysqli->connect_error){ 
                die("Se perdio la conexion, vuelve a intentarlo");
                                //error
            }else{
                $query = "UPDATE `citas` SET `visible` = '0' WHERE `citas`.`id` = $id_cita;";
                $mysqli->query($query)or die ($mysqli->error);
                $mysqli->close(); //cierra la conexion
                $status = 1;
            }//fin del if verifica la conexion bd
        echo $status;
} //fin if method POST
?>
