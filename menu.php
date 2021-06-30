<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top fs-6">
        <div class="container-fluid">
        
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>

            <a class="navbar-brand" href="index.php" ><img src="" loadinng="lazy" alt="LOGO" onerror="this.onerror=null; this.src=''" width="50px"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto d-none d-lg-block">
                    <li class="nav-item"></li>
                </ul>
                <ul class="navbar-nav">
                <?php
                    if(isset($usuario['nombre'])){
                       echo'
                        <div class="flex-shrink-0 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/avatars/user_male.png" alt="avatar" width="32" height="32" class="rounded-circle"> '.$usuario['nombre'].'
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="bd-versions">
                                <li><a class="dropdown-item" href="citas_medicas.php"><i class="bi bi-journal-medical"></i> Citas Médicas</a></li>
                                <li><a class="dropdown-item" href=""><i class="bi bi-person-circle"></i> Perfil</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#" onclick="cerrar_session_usuario()">Cerrar sesión</a></li>
                            </ul>
                        </div>
                        ';
                    }else{
                        echo'
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create_account.php">Crear cuenta</a>
                    </li>
                        ';
                    }
                    ?>
                </ul>
            </div> 
           

        </div>
</nav>


        

