<?php include('sesion.php'); ?>

<?php include('template/cabecera-logged.php'); ?>

<!-- Inicio Sidebar -->
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark fijado" style="width: 210px; height: 100vh;">
  <a href="/"
    class="d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <img src="img/miniaturas/LOGO Z.png" height="80" alt="">
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="inicio.php" class="nav-link text-white" aria-current="page">
        <i class="fas fa-home"></i>
        Inicio
      </a>
    </li>
    <li>
      <a href="estadisticas.php" class="nav-link text-white">
        <i class="fas fa-chart-line"></i>
        Estadisticas
      </a>
    </li>
    <li>
      <a href="pedidos.php" class="nav-link text-white">
        <i class="fas fa-list"></i>
        Pedidos
      </a>
    </li>
    <li>
      <a href="motoristas.php" class="nav-link text-white">
        <i class="fas fa-motorcycle"></i>
        Motoristas
      </a>
    </li>
    <li>
      <a href="comercios.php" class="nav-link text-white">
        <i class="fas fa-store"></i>
        Comercios
      </a>
    </li>
    <li>
      <a href="productos.php" class="nav-link text-white">
        <i class="fas fa-box-open"></i>
        Productos
      </a>
    </li>
    <li>
      <a href="clientes.php" class="nav-link text-white">
        <i class="fas fa-users"></i>
        Clientes
      </a>
    </li>
    <li>
      <a href="roles.php" class="nav-link text-white">
        <i class="far fa-address-book"></i>
        Roles
      </a>
    </li>
    <li>
      <a href="ayuda.php" class="nav-link text-white">
        <i class="far fa-question-circle"></i>
        Ayuda
      </a>
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
      data-bs-toggle="dropdown" aria-expanded="false">
      <div id="vista-img-perfil">
        <img src="img/users/user1.png" alt="" width="32" height="32" class="rounded-circle me-2">
      </div>
      <strong id="vista-username">Plemuso</strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
      <li><a class="dropdown-item" href="pedidos.php">Nuevo Pedido...</a></li>
      <li><a class="dropdown-item" href="roles.php">Configuraciones</a></li>
      <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>
    </ul>
  </div>
</div>
<!-- Fin Sidebar -->

<!-- Inicio de Contenido -->
<div style="margin-left: 220px;">
  <div class="container">
    <div class="row">

      <!-- Inicio Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-pill mt-3 shadow">
        <div class="container-fluid">
          <a class="navbar-brand"><i class="fas fa-cog fa-spin"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" type="button" aria-current="page">Perfil</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
      <!-- Final Navbar -->

      <!-- Inicio Seccion 1 -->
      <section id="seccion-soporte">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Detalles</h4>
                </div>
                <div class="card-body">
                  <div class="row d-flex justify-content-center">

                    <!-- Inicio Card -->
                    <div class="col-xs-12 col-lg-6 d-flex justify-content-center m-0">
                      <div class="card" style="width: 30rem;">
                        <div class="card-body ">
                          <h5 class="card-title">Información personal</h5>

                          <!-- Inicio -->
                          <div class="d-flex flex-column align-items-center p-3">
                            <img src="img/users/user1.png" class="rounded-circle mb-1" alt="" width="100" height="100">
                            <p class="m-1">Sara Smith</p>
                            <div><label for="formFile" class="btn-group btn btn-dark px-5 fw-bold rounded-pill">Editar
                                foto</label>
                              <input class="form-control" type="file" id="formFile" style="display: none;">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nombrePerfil" class="fw-bold">Nombre:</label>
                            <input type="text" class="form-control mb-1" name="" value="Plemuso" id="nombrePerfil"
                              placeholder="Ingrese Nombre">
                            <label for="apellidoPerfil" class="fw-bold">Apellido:</label>
                            <input type="text" class="form-control mb-1" name="" value="Fast" id="apellidoPerfil"
                              placeholder="Ingrese Apellido">
                            <label for="correoPerfil" class="fw-bold">Correo:</label>
                            <input type="email" class="form-control mb-1" name="" value="@Example" id="correoPerfil"
                              placeholder="@Example">

                            <p class="mt-3 d-flex justify-content-center">
                              <a class="btn btn-dark px-5 fw-bold rounded-pill" data-bs-toggle="collapse"
                                href="#collapseConfiguracion" role="button" aria-expanded="false"
                                aria-controls="collapseConfiguracion">
                                Configuracion
                              </a>
                            </p>
                            <div class="collapse" id="collapseConfiguracion">
                              <div class="card card-body">
                                <button type="button rounded-pill" class="btn btn-secondary btn-sm">Cambiar
                                  Contraseña</button>
                              </div>
                            </div>
                          </div>
                          <!-- Final -->

                        </div>
                      </div>
                    </div>
                    <!-- Final Card -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Final Seccion 1 -->

    </div>
  </div>
</div>
<!-- Final de Contenido -->

<?php include('template/pie.php'); ?>