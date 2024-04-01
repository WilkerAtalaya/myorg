<?php
    // Verificar si no hay una sesión iniciada
    if (!isset($_SESSION)) {
        session_start();
    }
    // Establecer $auth como verdadero si no hay una sesión iniciada
    $auth = $_SESSION['login'] ?? false;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="/myorg/css/basic.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Icons-fontawesome -->
    <script src="https://kit.fontawesome.com/7762120437.js" crossorigin="anonymous"></script>

    <script defer src="index.js"></script>
    


    <title>Plan Básico</title>
  </head>

  <body>
    
    <div class="grid-layout">
        <!-- NAVBAR ADMIN-->
        <div class="caja cajanav">
            
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow navadd">
                <!-- Logo Navbar-->
                <div class="logo-div1">
                    <div class="logo-div2">
                        <img class="logonegro" src="/myorg/img/logoblack.png" alt="">
                    </div>
                </div>
                
                <div class="titulocentral"><h5><b>Plataforma Mi Organización Digital</b></h5></div>
                <div class="nav-list">

                <ul class="nav-menu ">
                    <li class="nav-menu-item"><a href="../../index2.html" class="nav-menu-link nav-link"><i class="fas fa-home"></i> Inicio</a></li>     
                    <li class="nav-menu-item"><a href="./html/contacto.html" class="nav-menu-link nav-link"><i class="fas fa-pencil-ruler"></i> Edición Web</a></li>
                </ul>
                </div>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-circle-user"></i>
                            <span class="mr-2 d-none d-lg-inline text-black ">Antonio Fernandez</span>
                            
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1 text-gray-400"></i>
                                Cerrar Sesión
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>

        </div>

        <!-- MENU LATERAL-->
        <div class="caja cajamenu">
            <div id="sidebar-container" class="bg-primary">

                <div class="logo">
                  <h4 class="text-light font-weight-bold" >MENÚ</h4>
                </div>
        
                <div class="menu">
                  <a href="./slides.html" class="d-block text-light p-3 select-menu"><i class="fa-solid fa-house-chimney  mr-2"></i></i>Inicio</a>
                  <a href="../nosotros/informacion.html" class="d-block text-light p-3"><i class="fa-solid fa-users mr-2"></i>Nosotros</a>
                  <a href="../servicios/tecnologia.html" class="d-block text-light p-3"><i class="fa-solid fa-laptop-code mr-2"></i>Servicios</a>
                  <a href="../proyectos/proyectos.html" class="d-block text-light p-3"><i class="fa-solid fa-folder-open mr-2"></i>Proyectos</a>
                  <a href="../blog/publicaciones.html" class="d-block text-light p-3"><i class="fa-regular fa-id-card mr-2"></i></i>Blog</a>
                  <a href="../admins/administradores.html" class="d-block text-light p-3"><i class="fa-solid fa-user-tie mr-2"></i>Admins</a>
                </div>
        
              </div>
    
        </div>
    