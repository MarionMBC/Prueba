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
      <a href="inicio.php" class="nav-link active" aria-current="page">
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

<div style="margin-left: 210px;">
  <div class="container-fluid">
    <div class="row">
      <div id="home" class="col-12 d-flex justify-content-center">

        <div class="text-center">
          <i class="fas fa-cog fa-spin text-white" style="font-size: 200px;"></i>
          <h2 class="">Administradores</h2>
          <hr class="mx-auto w-75 mt-3">
          <p class="fs-5 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, sit!</p>
          <a href="" class="btn px-5 btn-light rounded-pill">Comenzar</a>
          <div class="ratio ratio-16x9 my-3 d-flex justify-content-center d-xs-none d-md-block" style="width: 700px;">
            <iframe class="rounded-6" src="video/fastVideo.mp4" allowfullscreen> </iframe>
          </div>
        </div>

      </div>

      <div class="container mt-3">
        <div class="row">
          <div class="col-12 text-center">
            <h2>¿Qué es FAST?</h2>
            <hr class="mx-auto w-75 mt-3">
            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, sit!</p>
            <img src="img/interfaces/pareja.png" class="img-fluid w-50" alt="">
          </div>
        </div>
      </div>

      <footer class="mt-4 d-flex justify-content-center align-items-center">
        <div class="container mb-0">
          <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</div>



<?php include('template/pie.php'); ?>