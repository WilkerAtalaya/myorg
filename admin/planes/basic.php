<?php
  require_once('../../includes/funciones/funcionesAdminIndex.php');
  // $auth = estaAutenticado();
  // if (!$auth) {
  //     header("Location: ../../");
  // }
  TemplateAdminIndex('headerIngreso');
?>
        <!-- LADO DERECHO-->
        <div class="caja ccont">

          <!-- contenido submenu-->
        <div class="c1">
            <nav class="navbar-expand-lg bg-light navsub">

                <div class="collapse navbar-collapse submenu" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link  active1" href="./slides.html">Slides </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./servicios.html">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./proyectos.html">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./conocenos.html">Conocenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./estadisticas.html">Estadísticas</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>

          <!-- Herramientas 
          <div class="c2">
            <div id="content" class="opciones-menu">

              <section>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-2 ">
                            <button type="button" class="btn btn-primary btn-lg btn-save">
                              <div>
                                <i class="fa-solid fa-desktop imgnewelement"></i> </div>
                              <div>Guardar</div>
                            </button>
                          </div>
                      </div>
                  </div>
              </section>
              <br> 
              
                <div class="divisor">
                </div>-->

        <section class="c3">
                <div class="tablero">
                  <table class="table">
                    <thead class="thead-dark change">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Subtítulo </th>
                        <th scope="col">Imagen </th>
                        <th scope="col">Herramientas</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>No esperes más! unete a la era de la transformación digital.</td>
                        <td>Digitaliza tu organización</td>
                        <td><img src="../img/referencial.jpeg" alt="imagen1" class="img-space"></td>
                        <td>
                          <div class="herramientas">
                            <button type="button" class="btn btn-primary btnh-eliminar"><i class="fa-solid fa-trash-can hrr" width="10px"></i></button>
                            <button type="button" class="btn btn-primary btnh"><i class="fa-solid fa-pen-to-square hrr" width="10px"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>No esperes más! unete a la era de la transformación digital.</td>
                        <td>Digitaliza tu organización</td>
                        <td><img src="../img/referencial.jpeg" alt="imagen1" class="img-space"></td>
                        <td>
                          <div class="herramientas">
                            <button type="button" class="btn btn-primary btnh-eliminar"><i class="fa-solid fa-trash-can hrr" width="10px"></i></button>
                            <button type="button" class="btn btn-primary btnh"><i class="fa-solid fa-pen-to-square hrr" width="10px"></i></button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>No esperes más! unete a la era de la transformación digital.</td>
                        <td>Digitaliza tu organización</td>
                        <td><img src="../img/referencial.jpeg" alt="imagen1" class="img-space"></td>
                        <td>
                          <div class="herramientas">
                            <button type="button" class="btn btn-primary btnh-eliminar"><i class="fa-solid fa-trash-can hrr" width="10px"></i></button>
                            <button type="button" class="btn btn-primary btnh"><i class="fa-solid fa-pen-to-square hrr" width="10px"></i></button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  
                  
                </div>

        </section>
        </div>  
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>

