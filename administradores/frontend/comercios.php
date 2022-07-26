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
        <i class="fas fa-home"></i> Inicio
      </a>
    </li>
    <li>
      <a href="estadisticas.php" class="nav-link text-white">
        <i class="fas fa-chart-line"></i> Estadisticas
      </a>
    </li>
    <li>
      <a href="pedidos.php" class="nav-link text-white">
        <i class="fas fa-list"></i> Pedidos
      </a>
    </li>
    <li>
      <a href="motoristas.php" class="nav-link text-white">
        <i class="fas fa-motorcycle"></i> Motoristas
      </a>
    </li>
    <li>
      <a href="comercios.php" class="nav-link active">
        <i class="fas fa-store"></i> Comercios
      </a>
    </li>
    <li>
      <a href="productos.php" class="nav-link text-white">
        <i class="fas fa-box-open"></i> Productos
      </a>
    </li>
    <li>
      <a href="clientes.php" class="nav-link text-white">
        <i class="fas fa-users"></i> Clientes
      </a>
    </li>
    <li>
      <a href="roles.php" class="nav-link text-white">
        <i class="far fa-address-book"></i> Roles
      </a>
    </li>
    <li>
      <a href="ayuda.php" class="nav-link text-white">
        <i class="far fa-question-circle"></i> Ayuda
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
                  onclick="mostrarOcultarCom('seccion-registro','seccion-lista')">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button" onclick="mostrarOcultarCom('seccion-lista','seccion-registro')">Ver
                  lista</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Final Navbar -->

      <!--Inicio Seccion 1 -->
      <section id="seccion-registro">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow mb-5" style="height: auto">
                <div class="card-header">
                  <h4 class="card-title">Registro de Comercios</h4>
                </div>
                <div class="card-body">
                  <div class="row fw-bold ">
                    <div class="col-3 justify-content-center">
                      <div class="form">
                        <div class="mb-3">
                          <label for="inputNombre" class="form-label">Nombre del
                            local</label>
                          <input type="email" class="form-control" id="inputNombre" aria-describedby="emailHelp"
                            placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Contraseña">
                        </div>
                        <div class="mb-3">
                          <label for="inputCorreo" class="form-label">Correo
                            electrónico</label>
                          <input type="email" class="form-control" id="inputCorreo" aria-describedby="emailHelp"
                            placeholder="Correo">
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form">
                        <div class="mb-3">
                          <label for="inputCantidadSuc" class="form-label">Cantidad de
                            sucursales</label>
                          <input type="number" class="form-control" id="inputCantidadSuc"
                            aria-describedby="ayudaSucursal" placeholder="Cantidad">
                        </div>
                        <div class="mb-3">
                          <label for="inputTel" class="form-label">Teléfono de
                            contacto</label>
                          <input type="text" class="form-control" id="inputTel" placeholder="Teléfono">
                        </div>
                        <div class="mb-3">
                          <label for="inputDireccionLoc" class="form-label">Dirección del
                            local</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="inputDireccionLoc"
                              aria-describedby="ayudaUbicacionLocal" placeholder="Dirección">
                            <span class="input-group-text">
                              <i id="basic-addon1" class="fas fa-search"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card border-dark">
                        <div class="card-header bg-dark text-light">
                          <p class="fw-bold m-0">Detalles</p>
                        </div>
                        <div class="card-body">
                          <div class="input-group mb-3 d-border-dark">
                            <span class="input-group-text bg-warning-dark border-0" style="width: 50px"
                              id="basic-addon1">
                              <i class="fas fa-building fa-2x"></i>
                            </span>
                            <div class="d-flex flex-fill flex-column align-items-center bg-warning rounded-1">
                              <span class="mx-2">Empresas asociadas</span>
                              <span class="">40</span>
                            </div>
                          </div>
                          <div class="input-group mb-3 d-border-dark">
                            <span class="input-group-text bg-warning-dark border-0" style="width: 50px"
                              id="basic-addon1">
                              <i class="fas fa-crown fa-lg"></i>
                            </span>
                            <div class="d-flex flex-fill flex-column align-items-center bg-warning rounded-1">
                              <span class="mx-2">Membresía premium</span>
                              <span class="">15</span>
                            </div>
                          </div>
                          <div class="input-group d-border-dark">
                            <span class="input-group-text bg-warning-dark border-0" style="width: 50px"
                              id="basic-addon1">
                              <i class="fas fa-coins fa-lg"></i>
                            </span>
                            <div class="d-flex flex-fill flex-column align-items-center bg-warning rounded-1">
                              <span class="mx-2">Membresía básica</span>
                              <span class="">25</span>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-6 mt-3 align-self-center">
                      <div id="mapa" style="height: 340px !important" class="mb-2">
                      </div>
                    </div>
                    <div class="col-6 mt-3 align-self-center">
                      <div class="card flex-fill">
                        <div class="card-body rounded-3 bg-dark text-warning">
                          <h5 class="card-title">Estadísticas de comercios</h5>
                          <canvas class="" id="graficoCom1"></canvas>
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
      <!-- Final Seccion 1 -->

      <!-- Inicio Seccion 2 -->
      <section id="seccion-lista">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Lista de comercios</h4>
                </div>
                <div class="card-body">
                  <div class="row d-flex justify-content-center">
                    <!-- Barra de Busqueda -->
                    <div style="width: 20rem;">
                      <div class=" d-flex flex-row align-items-center">
                        <input class="form-control" list="datalistOptions" id="exampleDataList"
                          placeholder="Escriba para buscar...">
                        <datalist id="datalistOptions">
                          <option value="Olimpo">
                          <option value="Bershka">
                          <option value="Unlimited">
                          <option value="Carrion">
                          <option value="Stradivarius">
                        </datalist>
                        <i class="fas fa-search fs-3 mx-2"></i>
                      </div>
                    </div>
                    <!-- Final Barra de Busqueda -->

                    <div class="col-12">

                      <!-- Inicio de Tabla -->
                      <div class="table-wrapper">
                        <table class="fl-table">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Estado</th>
                              <th>Nombre de comercio</th>
                              <th>Editar</th>
                              <th>Domicilio</th>
                              <th>Banco</th>
                              <th>Cuenta bancaria</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-dark text-light small btn-sm mx-auto"
                                  href="">Inactivo <i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Comercio 1</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td>Col. Vegeta</td>
                              <td>FICOHSA</td>
                              <td>0000-0000-0000-0000</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-warning small btn-sm mx-auto"
                                  href="">Activo<i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Comercio 2</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td>Col. Vegeta</td>
                              <td>FICOHSA</td>
                              <td>0000-0000-0000-0000</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-dark text-light small btn-sm mx-auto"
                                  href="">Inactivo <i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Comercio 3</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td>Col. Vegeta</td>
                              <td>FICOHSA</td>
                              <td>0000-0000-0000-0000</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-warning small btn-sm mx-auto"
                                  href="">Activo <i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Comercio 4</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td>Col. Vegeta</td>
                              <td>FICOHSA</td>
                              <td>0000-0000-0000-0000</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-dark text-light small btn-sm mx-auto"
                                  href="">Inactivo <i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Comercio 5</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td>Col. Vegeta</td>
                              <td>FICOHSA</td>
                              <td>0000-0000-0000-0000</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-warning small btn-sm mx-auto"
                                  href="">Activo <i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Comercio 6</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td>Col. Vegeta</td>
                              <td>FICOHSA</td>
                              <td>0000-0000-0000-0000</td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-dark text-light small btn-sm mx-auto"
                                  href="">Inactivo <i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Comercio 7</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td>Col. Vegeta</td>
                              <td>FICOHSA</td>
                              <td>0000-0000-0000-0000</td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-warning small btn-sm fw-bold mx-auto"
                                  href="">Activo <i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Comercio 8</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td>Col. Vegeta</td>
                              <td>FICOHSA</td>
                              <td>0000-0000-0000-0000</td>
                            </tr>


                          </tbody>
                        </table>
                      </div>
                      <!-- Final de Tabla -->
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

<?php include('template/pie-comercios.php'); ?>