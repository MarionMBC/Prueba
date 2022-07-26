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
    <li>
      <a href="motoristas.php" class="nav-link active">
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
                <a class="nav-link" type="button" aria-current="page"
                  onclick="mostrarOcultar('seccion-informacion','seccion-solicitudes')">Información</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button"
                  onclick="mostrarOcultar('seccion-solicitudes','seccion-informacion')">Solicitudes</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- Final Navbar -->

      <!--Inicio Seccion 1 -->
      <section id="seccion-informacion">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow" style="height: auto;">
                <div class="card-header">
                  <h4 class="card-title">Información</h4>
                </div>
                <div class="card-body">
                  <div class="row">

                    <!-- Inicio de cuerpo de card -->
                    <div class="col-3 mt-3">
                      <div
                        class="bg-dark text-white d-flex flex-column justify-content-center align-items-center rounded-3"
                        style="height: 300px;">
                        <p class="fw-bold">
                          Repartidores activos
                        </p>
                        <p class="text-warning">478</p>
                      </div>
                    </div>

                    <div class="col-3 mt-3">
                      <div
                        class="bg-dark text-white d-flex flex-column justify-content-center align-items-center rounded-3"
                        style="height: 300px;">
                        <p class="fw-bold">
                          Repartidores Inactivos
                        </p>
                        <p class="text-warning">22</p>
                      </div>
                    </div>

                    <div class="col-6 mt-3">
                      <div class="card bg-dark text-warning" style="width: auto; height: 300px;">

                        <div class="card-body">
                          <h5 class="card-title">Crecimiento de Repartidores</h5>
                          <canvas id="grafico1" width="400" height="150" class=""></canvas>
                        </div>

                      </div>

                    </div>

                    <div class="col-6 mt-3">
                      <div class="card" style="width: auto; height: 300px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Detalles</h5>
                          <div class="row">

                            <div class="col-6 mt-3">
                              <div
                                class="d-flex flex-row bg-warning border border-dark shadow rounded-3 p-2 align-items-center justify-content-center">
                                <i class="fas fa-motorcycle fs-3"></i>
                                <div class="ms-4 text-center">
                                  <p class="fw-bold my-0">Repartidores</p>
                                  <p class="my-1 ">500</p>
                                </div>

                              </div>
                            </div>

                            <div class="col-6 mt-3">
                              <div
                                class="d-flex flex-row bg-warning border border-dark shadow rounded-3 p-2 align-items-center justify-content-center">
                                <i class="fas fa-exclamation-triangle fs-3"></i>
                                <div class="ms-4 text-center">
                                  <p class="fw-bold my-0">Problemas</p>
                                  <p class="my-1 ">0</p>
                                </div>

                              </div>
                            </div>

                            <div class="col-12 mt-3">
                              <div class="d-flex justify-content-around">
                                <div class="text-center">
                                  <img src="img/users/user1.png" alt="" width="80" height="80" class="rounded-circle">
                                  <p class="fw-bold">Usuario 1</p>

                                </div>
                                <div class="text-center">
                                  <img src="img/users/user2.png" alt="" width="80" height="80" class="rounded-circle">
                                  <p class="fw-bold">Usuario 2</p>
                                </div>
                                <div class="text-center">
                                  <img src="img/users/user3.png" alt="" width="80" height="80" class="rounded-circle">
                                  <p class="fw-bold">Usuario 3</p>
                                </div>

                              </div>
                            </div>

                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="col-6 mt-3">
                      <div class="card" style="width:auto; height: 300px;">

                        <div class="card-body">
                          <h5 class="card-title">localización de Repartidores</h5>

                          <div id='coordenadas' class="centrar-componentes diseño-condenadas"></div>
                          <div class="col-12">
                            <div id="mapa" class="mb-5 ">

                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <!-- Final de cuerpo de card -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Final Seccion 1 -->

      <!-- Inicio Seccion 2 -->
      <section id="seccion-solicitudes">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Solicitudes</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">

                      <!-- Barra de Busqueda -->
                      <div class="col-12">
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

                      <!-- Inicio de Tabla -->
                      <div class="table-wrapper">
                        <table class="fl-table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Nombre</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Motorista</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-eye"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Motorista</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-eye"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Motorista</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-eye"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Motorista</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-eye"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Motorista</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-eye"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Motorista</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-eye"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>Motorista</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-eye"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>Motorista</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-eye"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                          </tbody>
                        </table>
                      </div>
                      <!-- Final de Tabla -->

                    </div>
                    <div class="col-6">
                      <div class="card" style="width:auto;">

                        <div class="card-body">
                          <h5 class="card-title">Perfil del Motorista</h5>
                          <div class="row">
                            <div class="col-12">
                              <div class="row">
                                <div class="col-12">
                                  <div class="form-group">
                                    <label for="">Nombre y Apellido</label>
                                    <input type="text" class="form-control" id="" placeholder="" disabled="true">
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-group">
                                    <label for="">Correo</label>
                                    <input type="text" class="form-control" id="" placeholder="" disabled="true">
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-group">
                                    <label for="">Teléfono</label>
                                    <input type="text" class="form-control" id="" placeholder="" disabled="true">
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-group">
                                    <label for="">DNII</label>
                                    <input type="text" class="form-control" id="" placeholder="" disabled="true">
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-group">
                                    <label for="">Dirección</label>
                                    <input type="text" class="form-control" id="" placeholder="" disabled="true">
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-group">
                                    <label for="">Fecha de Nacimiento</label>
                                    <input type="text" class="form-control" id="" placeholder="" disabled="true">
                                  </div>
                                </div>
                                <div class="col-12 mt-2 d-flex justify-content-center">
                                  <button class="btn btn-dark px-3 rounded-pill">
                                    Autorizar
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Final Seccion 2 -->

    </div>
  </div>
</div>
<!-- Final de Contenido -->

<?php include('template/pie-motoristas.php'); ?>