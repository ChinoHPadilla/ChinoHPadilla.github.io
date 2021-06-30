<?php
session_start();
require("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $status=0;  
    /*--variables POST--*/
    //datos de accesso
    $email =  strtolower($_POST["email"]);//convierte el email a solo minusculas
    $pass = $_POST["pass"];

    //seguridad
    $email = $mysqli->real_escape_string((strip_tags($email, ENT_QUOTES)));
    $pass = $mysqli->real_escape_string((strip_tags($pass, ENT_QUOTES)));

    if ($mysqli->connect_error) {die("UPS! Se perdio la conexion, vuelve a intentarlo");}

    //consulta
    $query = "select * from usuarios where email = '$email' and password = '$pass';";
    $result = $mysqli->query($query) or die ($mysqli->error); 

    if($result ->num_rows > 0){
        $data = $result->fetch_assoc();
        //variable de session
        $_SESSION['usuario']=$data;
        $status=1; //success
    }else{
        $status=0;//error
    }

    mysqli_free_result($result); //limpia la consulta
	$mysqli->close(); //cierra la conexion


    echo $status;
} //fin request POST
?>