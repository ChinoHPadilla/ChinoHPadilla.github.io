<?php
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id_usuario = $usuario["id"];
} else {
    $id_usuario = null;
}

include 'connection.php';

$query = "SELECT * FROM doctores;";
$result = $mysqli->query($query);   

$text='';

    if($result ->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if ($row["sexo"]==1){
                $link_img_perfil = 'assets/avatars/user_male.png';
            }else{
                $link_img_perfil = 'assets/avatars/user_female.png';
            }
            
        $text.="
        <div class='card mb-3'>
            <div class='row no-gutters'>
                <div class='col-2'>
                    <img class='card-img' loading='lazy' src='$link_img_perfil' alt='avatar' style='width: 100px;border-radius: 50%;'>
                </div>
                <div class='col-8'>
                    <div class='card-body ms-4'>
                        <h5 class='card-title'>".$row["nombre"]."</h5>
                        <p class='card-text'><small class='text-muted'><i class='bi bi-geo-alt'></i> ".$row["direccion"]."</small></p>
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
                No hay ninguna cita medica
            </div>
        </div>
        ";
    }
    echo $text;
?>