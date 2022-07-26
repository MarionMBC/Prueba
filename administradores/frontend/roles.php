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
      <a href="roles.php" class="nav-link active">
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
      <li><a class="dropdown-item " href="pedidos.php">Nuevo Pedido...</a></li>
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
                <a class="nav-link" type="button" onclick="mostrarOcultarCom('seccion-administradores')">Administradores
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button" onclick="mostrarOcultarCom('seccion-base-datos')">Base de Datos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button" onclick="mostrarOcultarCom('seccion-respaldos')">Respaldos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button" onclick="mostrarOcultarCom('seccion-transacciones')">Transacciones
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button" onclick="mostrarOcultarCom('seccion-contratos')">Contratos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button" onclick="mostrarOcultarCom('seccion-contactos')">Contactos
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--Fin de navbar-->
      <!--Inicio de la primera sección-->
      <section id="seccion-administradores">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow mb-5" style="height: auto">
                <div class="card-header">
                  <h4 class="card-title">Panel de administración</h4>
                </div>
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-12">
                      <!-- Inicio de Tabla -->
                      <div class="table-wrapper">
                        <table class="fl-table">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Estado</th>
                              <th>Rol</th>
                              <th>Contacto</th>
                              <th>Modificar</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="d-flex">
                                  <!--Img random-->
                                  <img src="img/interfaces/perfilPrueba.jpg" alt="" class="img-perfil">
                                  <p class="align-self-center ms-2 my-0">Evan FL</p>
                                </div>
                              </td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-dark text-light small btn-sm mx-auto"
                                  href="">Inactivo <i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Alfa</td>
                              <td class="">
                                <div class="d-flex">
                                  <img src="img/interfaces/perfilPrueba.jpg" class="img-perfil rounded-circle" alt="">
                                  <p class="my-0 ms-2 align-self-center">Evan
                                    Flores</p>
                                </div>
                              </td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>

                              <td><i class="fas fa-ellipsis-h"></i></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex">
                                  <!--Img random-->
                                  <img src="img/interfaces/perfilPrueba.jpg" alt="" class="img-perfil">
                                  <p class="align-self-center ms-2 my-0">Mac SM</p>
                                </div>
                              </td>
                              <td>
                                <a style="width: 110px"
                                  class="btn shadow-none btn-warning text-dark small btn-sm mx-auto" href="">Activo <i
                                    class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Omega</td>
                              <td class="">
                                <div class="d-flex">
                                  <img src="img/interfaces/perfilPrueba.jpg" class="img-perfil rounded-circle" alt="">
                                  <p class="my-0 ms-2 align-self-center">Mac Smith</p>
                                </div>
                              </td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td><i class="fas fa-ellipsis-h"></i></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex">
                                  <!--Img random-->
                                  <img src="img/interfaces/perfilPrueba.jpg" alt="" class="img-perfil">
                                  <p class="align-self-center ms-2 my-0">Sara ST</p>
                                </div>
                              </td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-dark text-light small btn-sm mx-auto"
                                  href="">inactivo <i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Omega</td>
                              <td class="">
                                <div class="d-flex">
                                  <img src="img/interfaces/perfilPrueba.jpg" class="img-perfil rounded-circle" alt="">
                                  <p class="my-0 ms-2 align-self-center">Sara
                                    Stone</p>
                                </div>
                              </td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td><i class="fas fa-ellipsis-h"></i></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex">
                                  <!--Img random-->
                                  <img src="img/interfaces/perfilPrueba.jpg" alt="" class="img-perfil">
                                  <p class="align-self-center ms-2 my-0">Emma RB</p>
                                </div>
                              </td>
                              <td>
                                <a style="width: 110px"
                                  class="btn shadow-none btn-warning text-dark small btn-sm mx-auto" href="">Activo <i
                                    class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Omega</td>
                              <td class="">
                                <div class="d-flex">
                                  <img src="img/interfaces/perfilPrueba.jpg" class="img-perfil rounded-circle" alt="">
                                  <p class="my-0 ms-2 align-self-center">Emma
                                    Robinson</p>
                                </div>
                              </td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td><i class="fas fa-ellipsis-h"></i></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex">
                                  <!--Img random-->
                                  <img src="img/interfaces/perfilPrueba.jpg" alt="" class="img-perfil">
                                  <p class="align-self-center ms-2 my-0">Spencer
                                    RM</p>
                                </div>
                              </td>
                              <td>
                                <a style="width: 110px" class="btn shadow-none btn-dark text-light small btn-sm mx-auto"
                                  href="">Inactivo <i class="fas fa-caret-down"></i></a>
                              </td>
                              <td>Omega</td>
                              <td class="">
                                <div class="d-flex">
                                  <img src="img/interfaces/perfilPrueba.jpg" class="img-perfil rounded-circle" alt="">
                                  <p class="my-0 ms-2 align-self-center">Spencer
                                    Romero</p>
                                </div>
                              </td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                              <td><i class="fas fa-ellipsis-h"></i></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- Final de Tabla -->
                    </div>
                    <div class="col-12">
                      <h5 class="">Herramientas administrativas</h5>
                      <hr>
                    </div>
                    <div class="col-2 my-1">
                      <a class="text-dark text-decoration-none" onclick="mostrarOcultarCom('seccion-base-datos')">
                        <div class="card shadow bg-warning px-3 d-border-dark d-flex flex-column align-items-center"
                          style="height: 140px">
                          <div class="card-body text-center">
                            <i class="fas fa-database fa-4x"></i>
                            <p class="mb-0 fw-bold align-self-center">Base de datos</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-2 my-1">
                      <a class="text-dark text-decoration-none" onclick="mostrarOcultarCom('seccion-respaldos')">
                        <div class="card shadow bg-warning px-3 d-border-dark d-flex flex-column align-items-center"
                          style="height: 140px">
                          <div class="card-body text-center">
                            <i class="fas fa-download fa-4x"></i>
                            <p class="mb-0 mt-auto fw-bold">Respaldos</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-2 my-1">
                      <a class="text-dark text-decoration-none" onclick="mostrarOcultarCom('seccion-transacciones')">
                        <div class="card shadow bg-warning px-3 d-border-dark d-flex flex-column align-items-center"
                          style="height: 140px">
                          <div class="card-body text-center align-self-center">
                            <i class="fas fa-money-check fa-4x"></i>
                            <p class="mb-0 fw-bold">Transacciones</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-2 my-1">
                      <a class="text-dark text-decoration-none" onclick="mostrarOcultarCom('seccion-contratos')">
                        <div class="card shadow bg-warning px-3 d-border-dark d-flex flex-column align-items-center"
                          style="height: 140px">
                          <div class="card-body text-center">
                            <i class="fas fa-file-contract fa-4x"></i>
                            <p class="mb-0 fw-bold">Contratos</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-2 my-1">
                      <a class="text-dark text-decoration-none" onclick="mostrarOcultarCom('seccion-contactos')">
                        <div class="card shadow bg-warning px-3 d-border-dark d-flex flex-column align-items-center"
                          style="height: 140px">
                          <div class="card-body text-center">
                            <i class="fas fa-id-card fa-4x"></i>
                            <p class="mb-0 fw-bold">Contactos</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="seccion-base-datos">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow mb-5" style="height: auto">
                <div class="card-header">
                  <h4 class="card-title" id="titulo-seccion">Base de Datos</h4>
                </div>
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-3">
                      <div class="card bg-dark text-center">
                        <div class="card-header py-1 bg-warning">
                          <p class="m-0 small">Usuarios registrados</p>
                        </div>
                        <div class="card-body text-light">
                          <div class="d-flex flex-column align-items-center text-center">
                            <p class="m-0 small">22,435</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="card bg-dark text-center">
                        <div class="card-header py-1 bg-warning">
                          <p class="m-0 small">Repartidores</p>
                        </div>
                        <div class="card-body text-light">
                          <div class="d-flex flex-column align-items-center text-center">
                            <p class="m-0 small">1,435</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="card bg-dark text-center">
                        <div class="card-header py-1 bg-warning">
                          <p class="m-0 small">Órdenes entregadas</p>
                        </div>
                        <div class="card-body text-light">
                          <div class="d-flex flex-column align-items-center text-center">
                            <p class="m-0 small">1,233,245</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="card bg-dark text-center">
                        <div class="card-header py-1 bg-warning">
                          <p class="m-0 small">Productos</p>
                        </div>
                        <div class="card-body text-light">
                          <div class="d-flex flex-column align-items-center text-center">
                            <p class="m-0 small">224,212</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="table-wrapper my-4">
                        <table class="fl-table">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Imagen</th>
                              <th>Nombre</th>
                              <th>Categoría</th>
                              <th>Proveedor</th>
                              <th>Cantidad</th>
                              <th>Precio</th>
                              <th>Ganancias</th>
                              <th>Fecha de Ingreso</th>
                              <th>Modificar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 1</td>
                              <td>Categoría 1</td>
                              <td>Proveedor 1</td>
                              <td>1</td>
                              <td>$1.000</td>
                              <td>$0.100</td>
                              <td>01/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 2</td>
                              <td>Categoría 2</td>
                              <td>Proveedor 2</td>
                              <td>2</td>
                              <td>$2.000</td>
                              <td>$0.200</td>
                              <td>02/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 3</td>
                              <td>Categoría 3</td>
                              <td>Proveedor 3</td>
                              <td>3</td>
                              <td>$3.000</td>
                              <td>$0.300</td>
                              <td>03/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 4</td>
                              <td>Categoría 4</td>
                              <td>Proveedor 4</td>
                              <td>4</td>
                              <td>$4.000</td>
                              <td>$0.400</td>
                              <td>04/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 5</td>
                              <td>Categoría 5</td>
                              <td>Proveedor 5</td>
                              <td>5</td>
                              <td>$5.000</td>
                              <td>$0.500</td>
                              <td>05/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 6</td>
                              <td>Categoría 6</td>
                              <td>Proveedor 6</td>
                              <td>6</td>
                              <td>$6.000</td>
                              <td>$0.600</td>
                              <td>06/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 7</td>
                              <td>Categoría 7</td>
                              <td>Proveedor 7</td>
                              <td>7</td>
                              <td>$7.000</td>
                              <td>$0.700</td>
                              <td>07/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 8</td>
                              <td>Categoría 8</td>
                              <td>Proveedor 8</td>
                              <td>8</td>
                              <td>$8.000</td>
                              <td>$0.800</td>
                              <td>08/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>9</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 9</td>
                              <td>Categoría 9</td>
                              <td>Proveedor 9</td>
                              <td>9</td>
                              <td>$9.000</td>
                              <td>$0.900</td>
                              <td>09/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>10</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 10</td>
                              <td>Categoría 10</td>
                              <td>Proveedor 10</td>
                              <td>10</td>
                              <td>$10.000</td>
                              <td>$1.000</td>
                              <td>10/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>11</td>
                              <td><img class="img-perfil" src="https://via.placeholder.com/100" alt=""></td>
                              <td>Producto 11</td>
                              <td>Categoría 11</td>
                              <td>Proveedor 11</td>
                              <td>11</td>
                              <td>$11.000</td>
                              <td>$1.100</td>
                              <td>11/01/2019</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="seccion-respaldos">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow mb-5" style="height: auto">
                <div class="card-header">
                  <h4 class="card-title" id="titulo-seccion">Respaldos</h4>
                </div>
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center justify-content-center">
                    <div style="width: 20rem;">
                      <div class="d-flex input-group align-self-center align-items-center mb-3">
                        <input class="form-control" list="datalistOptions" id="exampleDataList"
                          placeholder="Escriba para buscar...">
                        <datalist id="datalistOptions">
                          <option value="Copia 1">
                          <option value="Copia 2">
                          <option value="Copia 3">
                          <option value="Copia 4">
                          <option value="Copia 5">
                        </datalist>
                        <i class="input-group-text fas fa-search fs-4"></i>
                      </div>
                    </div>
                    <div class="my-2"><a href="" class="btn btn-warning rounded-1 border-dark">Crear
                        una nueva copia</a></div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-wrapper my-4">
                        <table class="fl-table">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Nombre de copia</th>
                              <th>Creador</th>
                              <th>Fecha</th>
                              <th>Tamaño</th>
                              <th>Restaurar</th>
                              <th>Eliminar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Copia 1</td>
                              <td>Administrador</td>
                              <td>11/01/2019</td>
                              <td>800 MB</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-undo"></i>
                                </a>
                              </td>
                              <td><a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Copia 2</td>
                              <td>Administrador</td>
                              <td>11/01/2019</td>
                              <td>800 MB</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-undo"></i>
                                </a>
                              </td>
                              <td><a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Copia 3</td>
                              <td>Administrador</td>
                              <td>11/01/2019</td>
                              <td>800 MB</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-undo"></i>
                                </a>
                              </td>
                              <td><a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Copia 4</td>
                              <td>Administrador</td>
                              <td>11/01/2019</td>
                              <td>800 MB</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-undo"></i>
                                </a>
                              </td>
                              <td><a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Copia 5</td>
                              <td>Administrador</td>
                              <td>11/01/2019</td>
                              <td>800 MB</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-undo"></i>
                                </a>
                              </td>
                              <td><a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Copia 6</td>
                              <td>Administrador</td>
                              <td>11/01/2019</td>
                              <td>800 MB</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-undo"></i>
                                </a>
                              </td>
                              <td><a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>Copia 7</td>
                              <td>Administrador</td>
                              <td>11/01/2019</td>
                              <td>800 MB</td>
                              <td><a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-undo"></i>
                                </a>
                              </td>
                              <td><a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="seccion-transacciones">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow mb-5" style="height: auto">
                <div class="card-header">
                  <h4 class="card-title" id="titulo-seccion">Transacciones</h4>
                </div>
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center justify-content-center">
                    <div style="width: 20rem;">
                      <div class="d-flex input-group align-self-center align-items-center mb-3">
                        <input class="form-control" list="datalistOptions" id="exampleDataList"
                          placeholder="Escriba para buscar...">
                        <datalist id="datalistOptions">
                          <option value="Transacción 1">
                          <option value="Transacción 2">
                          <option value="Transacción 3">
                          <option value="Transacción 4">
                          <option value="Transacción 5">
                        </datalist>
                        <i class="input-group-text fas fa-search fs-4"></i>
                      </div>
                    </div>
                    <div class="my-2"><a href="" class="btn btn-warning rounded-1 border-dark">Realizar
                        un pago</a></div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-wrapper my-4 table-responsive">
                        <table class="fl-table">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Remitente</th>
                              <th>Destinatario</th>
                              <th>Número de cuenta</th>
                              <th>Monto</th>
                              <th>Intereses</th>
                              <th>Banco</th>
                              <th>Tipo de pago</th>
                              <th>Fecha</th>
                              <th>Estado</th>
                              <th>Descripción</th>
                              <th>Ver recibo</th>
                              <th>Imprimir recibo</th>
                            </tr>
                          </thead>
                          <tbody class="text-wrap">
                            <tr>
                              <td>1</td>
                              <td>Stradivarius</td>
                              <td>FAST</td>
                              <td>123456789</td>
                              <td>$1,000.00</td>
                              <td>$0.00</td>
                              <td>BAC</td>
                              <td>Transferencia Electrónica</td>
                              <td>01/01/2020</td>
                              <td>Aceptado</td>
                              <td>Pago de contrato</td>
                              <td><a href="" class="btn btn-warning rounded-1 border-dark"><i
                                    class="fas fa-receipt"></i></a></td>
                              <td><a href="" class="btn btn-dark text-warning rounded-1 border-dark"><i
                                    class="fas fa-print"></i></a></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Olimpo</td>
                              <td>FAST</td>
                              <td>123456789</td>
                              <td>$1,000.00</td>
                              <td>$0.00</td>
                              <td>BAC</td>
                              <td>Efectivo</td>
                              <td>01/01/2020</td>
                              <td>Pendiente</td>
                              <td>Pago de contrato</td>
                              <td><a href="" class="btn btn-warning rounded-1 border-dark"><i
                                    class="fas fa-receipt"></i></a></td>
                              <td><a href="" class="btn btn-dark text-warning rounded-1 border-dark"><i
                                    class="fas fa-print"></i></a></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>FAST</td>
                              <td>EEH</td>
                              <td>123456789</td>
                              <td>$1,000.00</td>
                              <td>$0.00</td>
                              <td>BAC</td>
                              <td>Tarjeta</td>
                              <td>01/01/2020</td>
                              <td>Aceptado</td>
                              <td>Pago de energía eléctrica</td>
                              <td><a href="" class="btn btn-warning rounded-1 border-dark"><i
                                    class="fas fa-receipt"></i></a></td>
                              <td><a href="" class="btn btn-dark text-warning rounded-1 border-dark"><i
                                    class="fas fa-print"></i></a></td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Carrion</td>
                              <td>FAST</td>
                              <td>123456789</td>
                              <td>$1,000.00</td>
                              <td>$0.00</td>
                              <td>Banco Atrántida</td>
                              <td>Tarjeta</td>
                              <td>01/01/2020</td>
                              <td>Aceptado</td>
                              <td>Pago de contrato</td>
                              <td><a href="" class="btn btn-warning rounded-1 border-dark"><i
                                    class="fas fa-receipt"></i></a></td>
                              <td><a href="" class="btn btn-dark text-warning rounded-1 border-dark"><i
                                    class="fas fa-print"></i></a></td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Bershka</td>
                              <td>FAST</td>
                              <td>123456789</td>
                              <td>$1,000.00</td>
                              <td>$0.00</td>
                              <td>BAC</td>
                              <td>Efectivo</td>
                              <td>01/01/2020</td>
                              <td>Pendiente</td>
                              <td>Pago de contrato</td>
                              <td><a href="" class="btn btn-warning rounded-1 border-dark"><i
                                    class="fas fa-receipt"></i></a></td>
                              <td><a href="" class="btn btn-dark text-warning rounded-1 border-dark"><i
                                    class="fas fa-print"></i></a></td>
                            </tr>


                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="seccion-contratos">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow mb-5" style="height: auto">
                <div class="card-header">
                  <h4 class="card-title" id="titulo-seccion">Contratos</h4>
                </div>
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center justify-content-center">
                    <div style="width: 20rem;">
                      <div class="d-flex input-group align-self-center align-items-center mb-3">
                        <input class="form-control" list="datalistOptions" id="exampleDataList"
                          placeholder="Escriba para buscar...">
                        <datalist id="datalistOptions">
                          <option value="Contrato 1">
                          <option value="Contrato 2">
                          <option value="Contrato 3">
                          <option value="Contrato 4">
                          <option value="Contrato 5">
                        </datalist>
                        <i class="input-group-text fas fa-search fs-4"></i>
                      </div>
                    </div>
                    <div class="my-2"><a href="" class="btn btn-warning rounded-1 border-dark">Crear
                        un nuevo contrato</a></div>
                  </div>
                  <div class="row">
                    <div class="col-3 my-2">
                      <div class="card border-1">
                        <img src="img/categorias/OLIMPO.png" class="card-img-top border-bottom" alt="...">
                        <div class="card-body m-0">
                          <h5 class="card-title">Olimpo</h5>
                          <p class="card-text small m-0"></p>
                          <ul class="m-0 list-group list-unstyled list-group-flush">
                            <li class="small">Fecha de contrato: 01/01/2021</li>
                            <li class="small">Vigencia: 1 año.</li>
                            <li class="small">Tiempo restante: 1 mes, 16 días</li>
                          </ul>
                        </div>
                        <div class="card-footer">
                          <div class="d-flex justify-content-center text-center">
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-warning btn-sm mr-2"><i class="fas fa-print"></i></a>
                              <p class="small m-0 mx-1">Imprimir</p>
                            </div>
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-handshake-slash"></i></a>
                              <p class="small m-0 mx-1">Cancelar</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-3 my-2">
                      <div class="card border-1">
                        <img src="img/categorias/CARRION.png" class="card-img-top border-bottom" alt="...">
                        <div class="card-body my-0">
                          <h5 class="card-title">Carrion</h5>
                          <p class="card-text small m-0"></p>
                          <ul class="m-0 list-group list-unstyled list-group-flush">
                            <li class="small">Fecha de contrato: 01/01/2021</li>
                            <li class="small">Vigencia: 1 año.</li>
                            <li class="small">Tiempo restante: 1 mes, 16 días</li>
                          </ul>
                        </div>
                        <div class="card-footer">
                          <div class="d-flex justify-content-center text-center">
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-warning btn-sm mr-2"><i class="fas fa-print"></i></a>
                              <p class="small m-0 mx-1">Imprimir</p>
                            </div>
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-handshake-slash"></i></a>
                              <p class="small m-0 mx-1">Cancelar</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-3 my-2">
                      <div class="card border-1">
                        <img src="img/categorias/STRADIVARIUS.jpg" class="card-img-top border-bottom" alt="...">
                        <div class="card-body mx-0">
                          <h5 class="card-title">Stradivarius</h5>
                          <p class="card-text small m-0"></p>
                          <ul class="m-0 list-group list-unstyled list-group-flush">
                            <li class="small">Fecha de contrato: 01/01/2021</li>
                            <li class="small">Vigencia: 1 año.</li>
                            <li class="small">Tiempo restante: 1 mes, 16 días</li>
                          </ul>
                        </div>
                        <div class="card-footer">
                          <div class="d-flex justify-content-center text-center">
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-warning btn-sm mr-2"><i class="fas fa-print"></i></a>
                              <p class="small m-0 mx-1">Imprimir</p>
                            </div>
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-handshake-slash"></i></a>
                              <p class="small m-0 mx-1">Cancelar</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-3 my-2">
                      <div class="card border-1">
                        <img src="img/categorias/BERSHKA.png" class="card-img-top border-bottom" alt="...">
                        <div class="card-body m-0">
                          <h5 class="card-title">Bershka</h5>
                          <p class="card-text small m-0"></p>
                          <ul class="m-0 list-group list-unstyled list-group-flush">
                            <li class="small">Fecha de contrato: 01/01/2021</li>
                            <li class="small">Vigencia: 1 año.</li>
                            <li class="small">Tiempo restante: 1 mes, 16 días</li>
                          </ul>
                        </div>
                        <div class="card-footer">
                          <div class="d-flex justify-content-center text-center">
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-warning btn-sm mr-2"><i class="fas fa-print"></i></a>
                              <p class="small m-0 mx-1">Imprimir</p>
                            </div>
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-handshake-slash"></i></a>
                              <p class="small m-0 mx-1">Cancelar</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-3 my-2">
                      <div class="card border-1">
                        <img src="img/categorias/SPORTLINE.jpg" class="card-img-top border-bottom" alt="...">
                        <div class="card-body m-0">
                          <h5 class="card-title">SportLine</h5>
                          <p class="card-text small m-0"></p>
                          <ul class="m-0 list-group list-unstyled list-group-flush">
                            <li class="small">Fecha de contrato: 01/01/2021</li>
                            <li class="small">Vigencia: 1 año.</li>
                            <li class="small">Tiempo restante: 1 mes, 16 días</li>
                          </ul>
                        </div>
                        <div class="card-footer">
                          <div class="d-flex justify-content-center text-center">
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-warning btn-sm mr-2"><i class="fas fa-print"></i></a>
                              <p class="small m-0 mx-1">Imprimir</p>
                            </div>
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-handshake-slash"></i></a>
                              <p class="small m-0 mx-1">Cancelar</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-3 my-2">
                      <div class="card border-1">
                        <img src="img/categorias/ADOC.png" class="card-img-top border-bottom" alt="...">
                        <div class="card-body m-0">
                          <h5 class="card-title">ADOC</h5>
                          <p class="card-text small m-0"></p>
                          <ul class="m-0 list-group list-unstyled list-group-flush">
                            <li class="small">Fecha de contrato: 01/01/2021</li>
                            <li class="small">Vigencia: 1 año.</li>
                            <li class="small">Tiempo restante: 1 mes, 16 días</li>
                          </ul>
                        </div>
                        <div class="card-footer">
                          <div class="d-flex justify-content-center text-center">
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-warning btn-sm mr-2"><i class="fas fa-print"></i></a>
                              <p class="small m-0 mx-1">Imprimir</p>
                            </div>
                            <div class="text-center mx-2">
                              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-handshake-slash"></i></a>
                              <p class="small m-0 mx-1">Cancelar</p>
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
      <section id="seccion-contactos">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow mb-5" style="height: auto">
                <div class="card-header">
                  <h4 class="card-title">Contactos</h4>
                </div>
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-4">
                      <div class="card my-2">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2 bg-warning">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2 bg-warning">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="card my-2">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2 bg-warning">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2 bg-warning">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="card my-2">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2 bg-warning">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2 bg-warning">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card my-2">
                        <div class="card-body d-flex align-items-center py-2">
                          <div>
                            <img src="img/interfaces/perfilPrueba.jpg" class="rounded-circle me-2" alt=""
                              style="width:60px; height:60px">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="m-0 small fw-bold">Juan Perez</p>
                            <p class="m-0 small">2118 Thomridge Cir. Syracuse</p>
                            <p class="m-0 small">Connecticut(315) 555-5555</p>
                          </div>
                          <div class=""><i class="ms-4 fas fa-ellipsis-h"></i></div>
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
    </div>
  </div>
</div>
<!-- Final de Contenido -->

<?php include('template/pie-roles.php'); ?>