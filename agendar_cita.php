<?php
session_start();
//error_reporting(0);
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    //print_r($_SESSION['usuario']);
} else {
    $usuario = null;
}

include 'backend/connection.php';
?>


<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registro</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- AJAX -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/sweet_alert.js"></script>
    <script src="js/agendarCita.js"></script>
    <script src="js/logout.js"></script>


    <!-- SweetAlert -->
    <script src="assets/sweetalert2-10.12.5/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/sweetalert2-10.12.5/dist/sweetalert2.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/form-step.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            min-height: 100vh;
        }

        .card input,
        .card textarea,
        .card select {
            padding: 0.6rem;
            border-radius: 1rem;
        }
    </style>
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

                <div class="card mt-5 shadow p-3 bg-white">
                    <div class="card-body">

                        <form name="formAgendarCita" onsubmit="return false" action="return false">
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab">

                                <h1>Nueva cita</h1>
                                <p> <select id="selectHospital" class="form-select" aria-label="Default select example">
                                        <option value="1" selected>Elige el hospital</option>
                                        <?php
                                        $query = "select * from hospitales;";
                                        $result = $mysqli->query($query);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo " <option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select></p>
                                <p>
                                    <select id='selectDoctor' class='form-select'>
                                        <option value="1" selected>Elige un doctor</option>";
                                        <?php
                                        $query = "select * from doctores;";
                                        $result = $mysqli->query($query);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo " <option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </p>
                                <p> <select id="selectProblema" class="form-select" aria-label="Default select example">
                                        <option value="1" selected>Elige el problema</option>
                                        <?php
                                        $query = "select * from problemas;";
                                        $result = $mysqli->query($query);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo " <option value='" . $row["id"] . "'>" . $row["descripcion"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select></p>
                            </div>

                            <div class="tab">
                                <h1>Fecha:</h1>
                                <p><input id="inputFecha" type="date" oninput="this.className = ''"></p>
                            </div>

                            <div class="tab">
                                <h1>Hora:</h1>
                                <p><input id="inputHora" type="time" oninput="this.className = ''"></p>
                            </div>

                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button class="btn btn-lg btn-outline-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button class="btn btn-lg btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>

                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- columna deracha -->
            <div class="col-lg-3">

            </div>
        </div>

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/form-step.js"></script>
</body>

</html>