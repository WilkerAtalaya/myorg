
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
    <title>Ingreso</title>
    <link rel="stylesheet" href="/terrenadev/css/bootstrap.min.css">
    <link rel="stylesheet" href="/terrenadev/css/estilo.css">
</head>
<body class="<?php echo $inicio ? 'inicio' : ''; ?>">
    
  <section id="Top">
    <div class="d-flex bg-body-tertiary justify-content-between">
      <a class="my-2 me-5 ms-2" href="../"><img src="../img/Imagen1.png" class="d-block" height="50rem"></a>
      <p class="h5 mx-5 my-2"><strong>Servicios de Gestión Inmobiliaria, Valorización<br> 
        y Saneamiento Físico Legal de Inmuebles.</strong></p>
      <div></div>
      <div></div>
    </div>      
  </section>

  <section id="nav">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="color-terrena container-fluid">
      <div class="collapse navbar-collapse my-2" id="navbarNavAltMarkup">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <!-- <li class="navbar-item mx-5"><a class="nav-link" href="./" id="a-style" style="color: white;"> <i class="fa-solid fa-user mx-2"></i><strong>UsuarioX</strong></a></li>
          <li class="navbar-item"><a class="nav-link" style="color: white;">/</a></li>
          <li class="navbar-item mx-5"><a class="nav-link" style="color: white;" href="menu-op/usuarios.php" id="a-style"><strong>Registrar usuario</strong></a></li>
          <li class="navbar-item"><a class="nav-link" style="color: white;">/</a></li> -->
          <li class="navbar-item mx-5"><a class="nav-link" style="color: white;" href="/terrenadev/adminUx/" id="a-style"><strong>Registrar inmueble</strong></a></li>
          <li class="navbar-item"><a class="nav-link" style="color: white;">/</a></li>
          

          <?php if($auth): ?>
                <li class="navbar-item mx-5"><a href="/terrenadev/procesos/cerrar-sesion.php" class="nav-link" style="color: white;" href="#" id="a-style"><strong>Cerrar sesión</strong></a></li>
          <?php endif; ?>
        
        </ul>
      </div>
    </div>
    </nav>
  </section>