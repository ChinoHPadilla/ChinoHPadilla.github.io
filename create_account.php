<?php
session_start();
//error_reporting(0);
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  //print_r($_SESSION['usuario']);
  header("location:index.php");
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
    <script src="js/registrarUsuario.js"></script>

    <!-- SweetAlert -->
    <script src="assets/sweetalert2-10.12.5/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/sweetalert2-10.12.5/dist/sweetalert2.min.css">

    <!-- Custom styles for this template -->
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


        <div class="card mt-5 shadow p-3 bg-white">
            <div class="card-body">
                <section type="create_account">

                    <form name="usuario_new" onsubmit="return false" action="return false">

                        <div class="col">
                                <label for="inputName" class="col-form-label">Nombre:*</label>
                                <input id="inputName" name="nombre" type="text" class="form-control" placeholder="Nombre" required>
                        </div>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <label for="inputEmail" class="col-form-label">Correo electrónico:*</label>
                                <input id="inputEmail" name="email" type="email" class="form-control" placeholder="example@gmail.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputTelefono" class="col-form-label">Telefono:*</label>
                                <input id="inputTelefono" name="telefono" type="text" class="form-control" placeholder="000-000-00-00" required>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <label for="inputPassword" class="col-form-label">Contraseña:*</label>
                                <input id="inputPassword" name="password" type="password" class="form-control" placeholder="********" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword2" class="col-form-label">Repetir contraseña:*</label>
                                <input id="inputPassword2" name="password2" type="password" class="form-control" placeholder="********" required>
                            </div>
                        </div>

                        <div class="d-md-block text-center mt-3">
                            <button class="btn btn-primary w-50" onclick="registrar_usuario()">Registrar</button>
                        </div>

                        <div class="d-grid gap-2 d-md-block text-center mt-3">
                        ¿Ya tienes una cuenta? <a href="login.php" class="">Iniciar sesión</a>
                        </div>

                    </form>
                </section>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>