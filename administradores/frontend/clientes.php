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
      <a href="clientes.php" class="nav-link active">
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
                  onclick="mostrarOcultar('seccion-registro','seccion-vista')">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button" onclick="mostrarOcultar('seccion-vista','seccion-registro')">Ver
                  Clientes</a>
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
              <div class="card shadow" style="height: auto;">
                <div class="card-header">
                  <h4 class="card-title">Registro de Clientes</h4>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center">
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex justify-content-center m-3">
                        <i class="fas fa-users " style="font-size: 150px;"></i>
                      </div>
                      <form class="row g-3 needs-validation p-5 fw-bold" novalidate style="width: 37rem;">
                        <h4>Datos personales</h4>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">Nombre/Cliente</label>
                          <input type="text" class="form-control" id="validationCustom01" required placeholder="Nombre">
                          <div class="valid-feedback">
                            Escriba un nombre válido.
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">Correo</label>
                          <input type="email" class="form-control" id="validationCustom02" required
                            placeholder="Correo">
                          <div class="valid-feedback">
                            Escriba un correo válido
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">Edad</label>
                          <input type="number" class="form-control" id="validationCustom02" required placeholder="Edad">
                          <div class="valid-feedback">
                            Escriba una edad válida.
                          </div>
                        </div>
                        <div class="col-md-12">
                          <label for="validationCustom03" class="form-label">Dirección</label>
                          <input type="text" class="form-control" id="validationCustom03" required
                            placeholder="Dirección">
                          <div class="invalid-feedback">
                            Escriba un dirección válido.
                          </div>
                        </div>

                        <div class="row mt-3">
                          <h4>Datos de la Tarjeta</h4>
                          <div class="col-12">
                            <label for="inputNumTarjeta" class="form-label">N° Tarjeta</label>
                          </div>
                          <div class="col-12 mb-3">
                            <div class="d-flex col-12 align-items-center border rounded">
                              <input type="text" class="form-control border-0" id="inputNumTarjeta"
                                placeholder="__-__-__-__">
                              <div class="input-group-text border-0 rounded-none">
                                <i class="fab fa-cc-visa me-2 fs-1 text-dark"></i>
                                <i class="fab fa-cc-mastercard fs-1 text-dark"></i>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 col-xs-12 mb-3">
                            <label for="inputExpiracion" class="form-label">Fecha expiración</label>
                            <div class="border rounded-2">
                              <input type="text" class="form-control border-0" id="inputExpiracion" placeholder="MM/YY">
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-12 mb-3">
                            <label for="inputCCV" class="form-label">CCV</label>
                            <div class="border rounded-2">
                              <input type="text" class="form-control border-0" id="inputCCV"
                                placeholder="Ingrese el CCV">
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-12 mb-3">
                            <label for="inputNombre" class="form-label">Nombre</label>
                            <div class="border rounded-2">
                              <input type="text" class="form-control border-0" id="inputNombre"
                                placeholder="Ingrese el Nombre">
                            </div>
                          </div>
                          <div class="col-md-6 col-xs-12 mb-3">
                            <label for="inputApellido" class="form-label">Apellido</label>
                            <div class="border rounded-2">
                              <input type="text" class="form-control border-0" id="inputApellido"
                                placeholder="Ingrese el Apellido">
                            </div>
                          </div>
                          <div class="d-flex colum justify-content-center my-3">
                            <img src="img/interfaces/registroTarjeta.svg" alt="">
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
                  <h4 class="card-title">Lista de Clientes</h4>
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
                              <th>Nombre</th>
                              <th>Correo</th>
                              <th>Edad</th>
                              <th>Direccion</th>
                              <th>N. Tarjeta</th>
                              <th>Fecha Expiración</th>
                              <th>CCV</th>
                              <th>Nombre Tarjeta</th>
                              <th>Apellido Tarjeta</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Usuario</td>
                              <td>@Example</td>
                              <td>Edad</td>
                              <td>Calle, Avenida.</td>
                              <td>0000-0000-0000</td>
                              <td>11/25</td>
                              <td>123</td>
                              <td>Nombre T</td>
                              <td>Apellido T</td>
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
                              <td>Usuario</td>
                              <td>@Example</td>
                              <td>Edad</td>
                              <td>Calle, Avenida.</td>
                              <td>0000-0000-0000</td>
                              <td>11/25</td>
                              <td>123</td>
                              <td>Nombre T</td>
                              <td>Apellido T</td>
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
                              <td>Usuario</td>
                              <td>@Example</td>
                              <td>Edad</td>
                              <td>Calle, Avenida.</td>
                              <td>0000-0000-0000</td>
                              <td>11/25</td>
                              <td>123</td>
                              <td>Nombre T</td>
                              <td>Apellido T</td>
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
                              <td>Usuario</td>
                              <td>@Example</td>
                              <td>Edad</td>
                              <td>Calle, Avenida.</td>
                              <td>0000-0000-0000</td>
                              <td>11/25</td>
                              <td>123</td>
                              <td>Nombre T</td>
                              <td>Apellido T</td>
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
                              <td>Usuario</td>
                              <td>@Example</td>
                              <td>Edad</td>
                              <td>Calle, Avenida.</td>
                              <td>0000-0000-0000</td>
                              <td>11/25</td>
                              <td>123</td>
                              <td>Nombre T</td>
                              <td>Apellido T</td>
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
                              <td>Usuario</td>
                              <td>@Example</td>
                              <td>Edad</td>
                              <td>Calle, Avenida.</td>
                              <td>0000-0000-0000</td>
                              <td>11/25</td>
                              <td>123</td>
                              <td>Nombre T</td>
                              <td>Apellido T</td>
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
                              <td>Usuario</td>
                              <td>@Example</td>
                              <td>Edad</td>
                              <td>Calle, Avenida.</td>
                              <td>0000-0000-0000</td>
                              <td>11/25</td>
                              <td>123</td>
                              <td>Nombre T</td>
                              <td>Apellido T</td>
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
                              <td>Usuario</td>
                              <td>@Example</td>
                              <td>Edad</td>
                              <td>Calle, Avenida.</td>
                              <td>0000-0000-0000</td>
                              <td>11/25</td>
                              <td>123</td>
                              <td>Nombre T</td>
                              <td>Apellido T</td>
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

    </div>
  </div>
</div>
<!-- Final de Contenido -->

<?php include('template/pie-clientes.php'); ?>