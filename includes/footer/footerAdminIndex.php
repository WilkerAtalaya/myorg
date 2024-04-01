
<?php
  ob_start();
    if (!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

 
 
    //Base de datos 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"]). '/terrenadev-main/includes/config/database.php');
    $db= conectarDB();

    //Obtener los datos de la propiedad
    $consulta = "SELECT * FROM admins";
    $resultado = mysqli_query($db,$consulta);    
    $usuario = mysqli_fetch_assoc($resultado);

    $user= $usuario['username'];

    ob_end_flush();

?>

<div class="d-flex justify-content-center">
          <?php if($auth): ?>
            <a href="../procesos/cerrar-sesion.php"><input type="button" value="Cerrar sesión" class="btn btn-danger"></a>
          <?php endif; ?>
      </div>

    
    <script src="js/comandos2.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b9e89c55d6.js" crossorigin="anonymous"></script>
    </div>
    <section id="YoInTI">
      <div class="m-4">
      <p class=" h5 text-center justify-content-bottom">
        © TODOS LOS DERECHOS RESERVADOS – TERRENA CORP DESARROLLADO POR<a href="https://yointi.com" class="text-ref"> <strong>YOINTI</strong></a> 
      </p>
      </div>
    </section>
      
</body>
</html>