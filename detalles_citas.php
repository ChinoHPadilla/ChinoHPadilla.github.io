<?php
session_start();
//error_reporting(0);
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    $usuario = null;
}

include 'backend/connection.php';

$id = $mysqli->real_escape_string((strip_tags($_REQUEST["id"], ENT_QUOTES)));

$query = "SELECT cita.id, cita.fecha, cita.hora, doc.sexo, doc.nombre, doc.cargo, doc.direccion FROM citas as cita join doctores as doc on doc.id = cita.id_doctor WHERE cita.id = $id;";
$result = $mysqli->query($query);

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
    <script src="js/consulta_citas.js"></script>
    <script src="js/cancelar_cita.js"></script>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">



    <script>
        window.onload = function() {
            load_citasMedicas();
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

                <?php

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    if ($row["sexo"] == 1) {
                        $link_img_perfil = 'assets/avatars/user_male.png';
                    } else {
                        $link_img_perfil = 'assets/avatars/user_female.png';
                    }
                ?>

                    <div class='card mb-3' style="border-style: none;">
                        <div class='row no-gutters'>
                            <div class='col-2 me-4'>
                                <img class='card-img' loading='lazy' src='<?= $link_img_perfil ?>' alt='avatar' style='width: 100px;border-radius: 50%;'>
                            </div>
                            <div class='col-8'>
                                <div class='card-body'>
                                    <h5 class='card-title'><?= $row["nombre"] ?></h5>
                                    <p class='card-text'><small class='text-muted'><?= $row["cargo"] ?></p>
                                    <p class='card-text'><small class='text-muted'><i class="bi bi-geo-alt"></i> <?= $row["direccion"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3 shadow p-3 bg-white">
                        <div class="card-body">
                            <h3><i class="bi bi-calendar-week"></i> <?= $row["fecha"] ?></h3>
                            <hr class="mt-3 dropdown-divider">
                            <h3><i class="bi bi-clock"></i> <?= $row["hora"] ?></h3>
                            <h6 class="border-bottom pb-2 mb-0 mt-5" style="color: orange;">Servicios</h6>
                            <div class="d-flex text-muted pt-3">
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6><strong class="text-gray-dark">Chequeo semanal</strong></h6>
                                        <h6>$50</h6>
                                    </div>
                                    <span class="d-block fs-6" style="color: orange;">35 min</span>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6><strong class="text-gray-dark">Consulta</strong></h6>
                                        <h6>$120</h6>
                                    </div>
                                    <span class="d-block fs-6" style="color: orange;">35 min</span>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <div class="pb-3 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6><strong class="text-gray-dark">Total</strong></h6>
                                        <h6>$170</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="mt-5 mb-3 w-100 btn btn-lg btn-outline-secondary" id="cancelarCita" onclick="cancelarCita(<?= $row['id'] ?>)">Cancelar cita</button>

                <?php

                } else {
                    echo " 
                <div class='card mb-3'>
                    <div class='card-body'>
                       Error: No se encontro la página
                    </div>
                </div>
                ";
                }

                ?>
            </div>

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