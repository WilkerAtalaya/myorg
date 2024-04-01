<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terrena Corp</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="/terrenadev/css/bootstrap.min.css">
    <link rel="stylesheet" href="/terrenadev/css/estilo.css">
    <link rel="icon" href="/terrenadev/img/Imagen1.png">
</head>
<body>
    <header>
        <!--NAVEGACIÓN-->

            
        <div class="navbar-m" > 
                <div class=" div-inline d-flex justify-content-center mt-4 mx-4">
                <div class="d-flex"><img src="img/Imagen1.png" class="img-fluid" width="70%"></div>
                
                <div class="menu-icon div-inline d-flex align-items-center ">
                <i class="fa-solid fa-chart-simple" id="boton-sbm" onclick="toggleMenu()"></i>
                </div>
                </div>
                
                <nav>
                <ul id="menu-list">
                    <li class="my-2"><a href="#Inicio">Inicio</a></li>
                    <li class="my-2"><a href="#Trabajamos">Trabajamos</a></li>
                    <li class="my-2"><a href="#Inmuebles">Inmuebles</a></li>
                    <li class="my-2"><a href="#Contacto">Contacto</a></li>
                    <li class="my-2"><a href="./page/ingreso.php">Ingresar</a></li>
                </ul>
                </nav>

            </div>
            <div class="desk-nav">  
                
            <div class="sidebar" id="sidebar">
            
            <div class="d-flex ">
                
            <ul class="navbar-nav flex-grow-1 pe-3 my-5 text-center ">
                <li class="nav-item">
                <a class="nav-link my-2 " href="#Inicio" onclick="closeSidebar()" ><p class="h5 text-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio</p></a>
                </li>
                <li class="nav-item">
                <a class="nav-link my-2" href="#Trabajamos" onclick="closeSidebar()"><p class="h5 text-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Servicios</p></a>
                </li>
                <li class="nav-item">
                <a class="nav-link my-2" href="#Inmuebles" onclick="closeSidebar()"><p class="h5 text-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inmuebles</p></a>
                </li>
                <li class="nav-item">
                <a class="nav-link my-2" href="#Contacto" onclick="closeSidebar()"><p class="h5 text-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactanos</p></a>
                </li>       
                <li class="nav-item">
                <a class="nav-link my-2" href="./page/ingreso.php"><p class="h5 text-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ingresar</p></a>
                </li>             
            </ul>
        </div>
        </div>
        </div>
    </header>
    