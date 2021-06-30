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
  <title>Iniciar Sesión</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- AJAX -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/sweet_alert.js"></script>
  <script src="js/login.js"></script>

  <!-- SweetAlert -->
  <script src="assets/sweetalert2-10.12.5/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="assets/sweetalert2-10.12.5/dist/sweetalert2.min.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/style.css">

  <style>
    body {
      min-height: 100vh;
    }

    #form-login input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    #form-login input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    
  </style>

</head>

<body>

  <!-- menu -->
  <?php include("menu.php"); ?>

  <div class="container text-center">
    <div class="row d-flex justify-content-center">
      <div class="col-md-4 mt-5">
        <div class="card mt-4 p-3 bg-white">
          <div class="card-body">
            <form name="usuario_new" onsubmit="return false" action="return false">

              <img class="mb-2 mt-2" src="" alt="" width="200">
              <h1 class="h4 mt-3 mb-3 fw-normal">Iniciar sesión</h1>
              <div class="form-floating">
                <input name="email" type="email" class="form-control" id="inputEmail" placeholder="example@gmail.com" required autofocus>
                <label for="inputEmail">Correo electrónico</label>
              </div>
              <div class="form-floating">
                <input name="password" type="password" class="form-control" id="inputPassword" placeholder="********" required>
                <label for="inputPassword">Contraseña</label>
              </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Recordarme
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" id="btn_login">Iniciar sesión</button>
              <a class="nav-link" href="create_account.php">Crear cuenta</a>

              <p class="mt-2 mb-0 text-muted">&copy; 2020-2021</p>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $("#btn_login").on('click', function(event) {
        event.preventDefault();
        logear();
      });
    });
  </script>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>