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
    <title>Citas Médicas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- AJAX -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/logout.js"></script>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">

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
                <section type="categorias">
                    <div id="categorias" class="row">
                        <div class="col-6 col-lg-12">
                            <div class="card text-center mb-2">
                                    <?php
                                    if (isset($usuario['nombre'])) {
                                        echo '<a class="btn" href="medicos.php" style="padding:0">';
                                    } else {
                                        echo '<a class="btn" href="login.php" style="padding:0">';
                                    }
                                    ?>
                                    <img src='assets/img/medicos.png' class='card-img' style="width: 100px;border-radius: 50%;" alt='medicos'>
                                    <div class="card-body">
                                        <h5 id="id_categoria" class="card-title text-categoria">Médicos</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-lg-12">
                            <div class="card text-center mb-2">
                                <?php
                                if (isset($usuario['nombre'])) {
                                    echo '<a class="btn" href="hospitales.php" style="padding:0">';
                                } else {
                                    echo '<a class="btn" href="login.php" style="padding:0">';
                                }
                                ?>
                                    <img src='assets/img/Hospitales.png' class='card-img' style="width: 100px;border-radius: 50%;" alt='Hospitales'>
                                    <div class="card-body">
                                        <h5 id="id_categoria" class="card-title text-categoria">Hospitales</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-lg-12">
                            <div class="card text-center mb-2">
                                <?php
                                if (isset($usuario['nombre'])) {
                                    echo '<a class="btn" href="farmacias.php" style="padding:0">';
                                } else {
                                    echo '<a class="btn" href="login.php" style="padding:0">';
                                }
                                ?>
                                    <img src='assets/img/Farmacias.png' class='card-img' style="width: 100px;border-radius: 50%;" alt='Farmacias'>
                                    <div class="card-body">
                                        <h5 id="id_categoria" class="card-title text-categoria">Farmacias</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-lg-12">
                            <div class="card text-center mb-2">
                                <?php
                                if (isset($usuario['nombre'])) {
                                    echo '<a class="btn" href="agendar_cita.php" style="padding:0">';
                                } else {
                                    echo '<a class="btn" href="login.php" style="padding:0">';
                                }
                                ?>
                                <img src='assets/img/CitasMedicas.png' class='card-img' style="width: 100px;border-radius: 50%;" alt='Citas medicas'>
                                <div class="card-body">
                                    <h5 id="id_categoria" class="card-title text-categoria">Citas médicas</h5>
                                </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-lg-12">
                            <div class="card text-center mb-2">
                                    <?php
                                        if (isset($usuario['nombre'])) {
                                            echo '<a class="btn" href="emergencias.php" style="padding:0">';
                                        } else {
                                            echo '<a class="btn" href="login.php" style="padding:0">';
                                        }
                                    ?>
                                    <img src='assets/img/Emergencia.png' class='card-img' style="width: 100px;border-radius: 50%;" alt='Emergencia'>
                                    <div class="card-body">
                                        <h5 id="id_categoria" class="card-title text-categoria">Emergencia</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </section>

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