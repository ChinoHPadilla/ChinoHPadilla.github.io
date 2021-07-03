<?php
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id_usuario = $usuario["id"];
} else {
    $id_usuario = null;
}

include 'connection.php';

$query = "SELECT * FROM emergencias";
$result = $mysqli->query($query);   

$text='';

    if($result ->num_rows > 0){
        while($row = $result->fetch_assoc()){

        $link_img_perfil = 'assets/img/emergencia.png'; 
            
        $text.="
        <div class='card mb-3'>
            <div class='row no-gutters'>
                <div class='col-2'>
                    <img class='card-img' loading='lazy' src='$link_img_perfil' alt='avatar' style='width: 100px;border-radius: 50%;'>
                </div>
                <div class='col-8'>
                    <div class='card-body ms-4'>
                        <h5 class='card-title'><i class='bi bi-telephone'></i> ".$row["telefono"]."</h5>
                    </div>
                </div>
            </div>
        </div>
        ";
        } //fin del while

    $result->free();
    $mysqli->close();

    }else{
        $text.=" 
        <div class='card mb-3'>
            <div class='card-body'>
                No hay ningun numero de emergencias
            </div>
        </div>
        ";
    }
    echo $text;
?>