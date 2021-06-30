<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $status=0;

    if ($_POST['pass']==$_POST['pass2']) { //valida el password
        /*--variables POST--*/
        //datos de accesso

        if(!empty($_POST["email"])){
            $email = $mysqli->real_escape_string((strip_tags($_POST["email"], ENT_QUOTES)));
            $email = strtolower($email); //convierte el email a solo minusculas
        }
        
        $pass = $mysqli->real_escape_string((strip_tags($_POST["pass"], ENT_QUOTES)));
        $pass2 = $mysqli->real_escape_string((strip_tags($_POST["pass2"], ENT_QUOTES)));
        
        //informacion
        $nombre = $mysqli->real_escape_string((strip_tags($_POST["nombre"], ENT_QUOTES)));
        $telefono = $mysqli->real_escape_string((strip_tags($_POST["telefono"], ENT_QUOTES)));


            if ($mysqli->connect_error){ 
                die("Se perdio la conexion, vuelve a intentarlo");
                                //error
            }else{
                /*-------------------------|| INSERTAR ||--------------------*/
                $query = "INSERT INTO `usuarios`(`email`, `password`, `nombre`, `telefono`) VALUES (
                    '$email','$pass','$nombre','$telefono')";
                $mysqli->query($query)or die ($mysqli->error);

                /*-----------------||INICIA SESION AUTOMATICAMENTE||-------------------- */
                //consulta
                $query = "select * from usuarios where email = '$email' and password = '$pass';";
                $result = $mysqli->query($query) or die ($mysqli->error); 
            
                if($result ->num_rows > 0){
                    $data = $result->fetch_assoc();
                    //variable de session
                    $_SESSION['usuario']=$data;
                    $status=1; //success
                }

                mysqli_free_result($result); //limpia la consulta
                $mysqli->close(); //cierra la conexion

            }//fin del if verifica la conexion bd
        echo $status;
    }//fin del validar password
} //fin if method POST
?>
