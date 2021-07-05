<?php
session_start();
//error_reporting(0);
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    $usuario = null;
}

include 'backend/connection.php';
?>
<!doctype html>
<html lang="es-MX">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Médicos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- AJAX -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/logout.js"></script>
    <script src="js/consulta_medicos.js"></script>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">

   

    <script>
        window.onload = function() {
            load_medicos();
        }
    </script>

</head>

<body>

    <!-- menu -->
    <?php include("menu.php"); ?>

    <div class="container">

        <div class="row pt-3">
            <!-- columna izquierda -->
            <div class="col-lg-3">

            </div>
            <!-- columna centro -->
            <div class="col-lg-6">
                <h1>Médicos</h1>
                <div id="medicos"></div>

            </div>
            <!-- columna deracha -->
            <div class="col-lg-3">

            </div>
        </div>


    </div>





    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>