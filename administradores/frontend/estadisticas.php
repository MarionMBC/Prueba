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
      <a href="estadisticas.php" class="nav-link active">
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
<div style="margin-left: 220px;" class="">
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
                <a class="nav-link" type="button" aria-current="page">Pedidos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Final Navbar -->

      <!-- Inicio de Graficas -->
      <div class="col-4 d-flex justify-content-center mt-3">
        <div class="card" style="width:30rem;">
          <div class="card-body rounded-3 bg-dark text-warning">
            <h5 class="card-title">Año 2019</h5>
            <canvas class="" id="grafico1" width="100" height="100"></canvas>
          </div>
        </div>
      </div>

      <div class="col-4 d-flex justify-content-center mt-3">
        <div class="card" style="width:30rem;">
          <div class="card-body rounded-3 bg-dark text-warning">
            <h5 class="card-title">Año 2020</h5>
            <canvas id="grafico2" width="100" height="100"></canvas>
          </div>
        </div>
      </div>

      <div class="col-4 d-flex justify-content-center mt-3">
        <div class="card" style="width:30rem;">
          <div class="card-body rounded-3 bg-dark text-warning">
            <h5 class="card-title">Ganancias</h5>
            <canvas id="grafico3" width="100" height="100"></canvas>
          </div>
        </div>
      </div>
      <!-- Final de Graficas -->

      <div class="row d-flex justify-content-center mt-5">
        <!-- Barra de Busqueda -->
        <div style="width: 20rem;">
          <div class=" d-flex flex-row align-items-center">
            <input class="form-control" list="datalistOptions" id="exampleDataList"
              placeholder="Escriba para buscar...">
            <datalist id="datalistOptions">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
            </datalist>
            <i class="fas fa-search fs-3 mx-2"></i>
          </div>
        </div>
        <!-- Final Barra de Busqueda -->
      </div>


      <!-- Inicio tabla -->

      <div class="col-12 mt-2">
        <div class="table-wrapper">
          <table class="fl-table">
            <thead>
              <tr>
                <th>AÑO</th>
                <th>CANTIDAD PEDIDOS</th>
                <th>GANANCIAS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Content 1</td>
                <td>Content 1</td>
                <td>Content 1</td>

              </tr>
              <tr>
                <td>Content 2</td>
                <td>Content 2</td>
                <td>Content 2</td>
              </tr>
              <tr>
                <td>Content 3</td>
                <td>Content 3</td>
                <td>Content 3</td>
              </tr>
              <tr>
                <td>Content 4</td>
                <td>Content 4</td>
                <td>Content 4</td>
              </tr>
              <tr>
                <td>Content 5</td>
                <td>Content 5</td>
                <td>Content 5</td>
              </tr>
              <tr>
                <td>Content 6</td>
                <td>Content 6</td>
                <td>Content 6</td>
              </tr>
              <tr>
                <td>Content 7</td>
                <td>Content 7</td>
                <td>Content 7</td>
              </tr>
              <tr>
                <td>Content 8</td>
                <td>Content 8</td>
                <td>Content 8</td>
              </tr>
              <tr>
                <td>Content 9</td>
                <td>Content 9</td>
                <td>Content 9</td>
              </tr>
              <tr>
                <td>Content 10</td>
                <td>Content 10</td>
                <td>Content 10</td>
              </tr>
            <tbody>
          </table>
        </div>
      </div>
      <!-- Final tabla -->


    </div>
  </div>
</div>
<!-- Final de Contenido -->

<?php include('template/pie-estadisticas.php'); ?>