<?php
session_start();
//session_destroy();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $status = 0;
    $destroy = $_POST["destroy"];
    
    switch($destroy){
        case 1: 
            unset($_SESSION['usuario']);
            $status = 1;
        break;
    }
    
    echo $status;
}//fin request POST
?>