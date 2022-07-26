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
      <a href="pedidos.php" class="nav-link active">
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
                <a class="nav-link" type="button" aria-current="page"
                  onclick="mostrarOcultar('seccion-registro','seccion-vista','seccion-pagos')">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button"
                  onclick="mostrarOcultar('seccion-vista','seccion-registro','seccion-pagos')">Ver Pedidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button"
                  onclick="mostrarOcultar('seccion-pagos','seccion-registro','seccion-vista')">Gestión de Pagos</a>
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
              <div class="card shadow" style="height: 40rem;">
                <div class="card-header">
                  <h4 class="card-title">Registro Pedido Mayorista</h4>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center">
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex justify-content-center m-3">
                        <i class="fas fa-clipboard-list " style="font-size: 150px;"></i>
                      </div>
                      <form class="row g-3 needs-validation p-5 fw-bold" novalidate style="width: 37rem;">
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">Nombre del Cliente</label>
                          <input type="text" class="form-control" id="validationCustom01" required placeholder="Nombre">
                          <div class="valid-feedback">
                            Escriba un nombre válido.
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">Código/Producto</label>
                          <input type="text" class="form-control" id="validationCustom02" required placeholder="Código">
                          <div class="valid-feedback">
                            Escriba un codigo válido
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">Cantidad</label>
                          <input type="number" class="form-control" id="validationCustom02" required
                            placeholder="Cantidad">
                          <div class="valid-feedback">
                            Escriba una cantidad válida.
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom03" class="form-label">Monto a Pagar</label>
                          <input type="number" class="form-control" id="validationCustom03" required
                            placeholder="Monto">
                          <div class="invalid-feedback">
                            Escriba un monto válido.
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom04" class="form-label">Tallas</label>
                          <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Escoger talla...</option>
                            <option>XS</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                          </select>
                          <div class="invalid-feedback">
                            Seleccione una talla correcta.
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                          <button class="btn btn-dark px-5 rounded-pill" type="submit">Agregar</button>
                        </div>
                      </form>
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
      <section id="seccion-vista">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Lista de Pedidos</h4>
                </div>
                <div class="card-body">
                  <div class="row d-flex justify-content-center">

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

                    <div class="col-12">

                      <!-- Inicio de Tabla -->
                      <div class="table-wrapper">
                        <table class="fl-table">
                          <thead>
                            <tr>
                              <th># Pedido</th>
                              <th>Fecha</th>
                              <th>Comercio</th>
                              <th>Cliente</th>
                              <th>Estado</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>12/12/2020</td>
                              <td>Comercio 1</td>
                              <td>Cliente 1</td>
                              <td>Pendiente</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>12/12/2020</td>
                              <td>Comercio 2</td>
                              <td>Cliente 2</td>
                              <td>Pendiente</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>12/12/2020</td>
                              <td>Comercio 3</td>
                              <td>Cliente 3</td>
                              <td>Pendiente</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>12/12/2020</td>
                              <td>Comercio 4</td>
                              <td>Cliente 4</td>
                              <td>Pendiente</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>12/12/2020</td>
                              <td>Comercio 5</td>
                              <td>Cliente 5</td>
                              <td>Pendiente</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>12/12/2020</td>
                              <td>Comercio 6</td>
                              <td>Cliente 6</td>
                              <td>Pendiente</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>12/12/2020</td>
                              <td>Comercio 7</td>
                              <td>Cliente 7</td>
                              <td>Pendiente</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>12/12/2020</td>
                              <td>Comercio 8</td>
                              <td>Cliente 8</td>
                              <td>Pendiente</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
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

      <!-- Inicio Seccion 3 -->
      <section id="seccion-pagos">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Gestión de Pagos</h4>
                </div>
                <div class="card-body">
                  <div class="row d-flex justify-content-center">

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

                    <div class="col-12">

                      <!-- Inicio de Tabla -->
                      <div class="table-wrapper">
                        <table class="fl-table">
                          <thead>
                            <tr>
                              <th># Pedido</th>
                              <th>Fecha</th>
                              <th>Ganancias Fast</th>
                              <th>Ganancias Comercio</th>
                              <th>Ganancias Motorista</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>12/12/2020</td>
                              <td>L. 1,200.50</td>
                              <td>L. 4,584.90</td>
                              <td>L. 550.50</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>12/12/2020</td>
                              <td>L. 1,200.50</td>
                              <td>L. 4,584.90</td>
                              <td>L. 550.50</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>12/12/2020</td>
                              <td>L. 1,200.50</td>
                              <td>L. 4,584.90</td>
                              <td>L. 550.50</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>12/12/2020</td>
                              <td>L. 1,200.50</td>
                              <td>L. 4,584.90</td>
                              <td>L. 550.50</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>12/12/2020</td>
                              <td>L. 1,200.50</td>
                              <td>L. 4,584.90</td>
                              <td>L. 550.50</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>12/12/2020</td>
                              <td>L. 1,200.50</td>
                              <td>L. 4,584.90</td>
                              <td>L. 550.50</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>12/12/2020</td>
                              <td>L. 1,200.50</td>
                              <td>L. 4,584.90</td>
                              <td>L. 550.50</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>12/12/2020</td>
                              <td>L. 1,200.50</td>
                              <td>L. 4,584.90</td>
                              <td>L. 550.50</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
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
      <!-- Final Seccion 3 -->

    </div>
  </div>
</div>
<!-- Final de Contenido -->

<?php include('template/pie-pedidos.php'); ?>