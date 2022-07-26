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
      <a href="ayuda.php" class="nav-link active">
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
                  onclick="mostrarOcultar('seccion-soporte','seccion-chats')">Soporte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" type="button" onclick="mostrarOcultar('seccion-chats','seccion-soporte')">Chats
                </a>
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
                  <h4 class="card-title">Solicitudes de Soporte</h4>
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
                              <th># Ticket</th>
                              <th>Cliente</th>
                              <th>Edad</th>
                              <th>Detalle de Consulta</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>123</td>
                              <td>@Cliente</td>
                              <td>123</td>
                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ea!</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="far fa-comment-dots"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-dark">
                                  <i class="far fa-hand-paper"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>123</td>
                              <td>@Cliente</td>
                              <td>123</td>
                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ea!</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="far fa-comment-dots"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-dark">
                                  <i class="far fa-hand-paper"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>123</td>
                              <td>@Cliente</td>
                              <td>123</td>
                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ea!</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="far fa-comment-dots"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-dark">
                                  <i class="far fa-hand-paper"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>123</td>
                              <td>@Cliente</td>
                              <td>123</td>
                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ea!</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="far fa-comment-dots"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-dark">
                                  <i class="far fa-hand-paper"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>123</td>
                              <td>@Cliente</td>
                              <td>123</td>
                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ea!</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="far fa-comment-dots"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-dark">
                                  <i class="far fa-hand-paper"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>123</td>
                              <td>@Cliente</td>
                              <td>123</td>
                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ea!</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="far fa-comment-dots"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-dark">
                                  <i class="far fa-hand-paper"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>123</td>
                              <td>@Cliente</td>
                              <td>123</td>
                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ea!</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="far fa-comment-dots"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-dark">
                                  <i class="far fa-hand-paper"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-danger">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>123</td>
                              <td>@Cliente</td>
                              <td>123</td>
                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ea!</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-outline-warning">
                                  <i class="far fa-comment-dots"></i> </a>
                                <a href="#" class="btn btn-sm btn-outline-dark">
                                  <i class="far fa-hand-paper"></i> </a>
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
      <!-- Final Seccion 1 -->

      <!--Inicio Seccion 2 -->
      <section id="seccion-chats">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-3">
              <div class="card shadow" style="height: auto;">
                <div class="card-header bg-dark">
                  <h4 class="card-title  text-white">Fast Chats</h4>
                </div>
                <div class="card-body d-flex justify-content-center m-0">
                  <div class="card d-flex flex-row rounded-6 m-0" style="width:auto;">

                    <div class="container-fluid m-0">
                      <div class="row m-0">

                        <div class="col-4">
                          <div class="bg-dark text-white fw-bold h-100 d-flex flex-column scroll-vertical rounded-6">

                            <div
                              class="pointer d-flex flex-row justify-content-start align-items-center border-bottom border-1 border-white "
                              id="1" onclick="seleccionado(this.id)">
                              <img src="img/users/user1.png" width="50" height="50"
                                class="rounded-circle border border-2 border-warning my-3 mx-2" alt="">
                              <p class="my-3 mx-2">Gerardo Gómez</p>
                            </div>

                            <div
                              class="d-flex flex-row justify-content-start align-items-center border-bottom border-1 border-white"
                              id="2">
                              <img src="img/users/user2.png" width="50" height="50"
                                class="rounded-circle border border-2 border-warning my-3 mx-2" alt="">
                              <p class="my-3 mx-2">Andres López</p>
                            </div>
                            <div
                              class="d-flex flex-row justify-content-start align-items-center border-bottom border-1 border-white"
                              id="3">
                              <img src="img/users/user3.png" width="50" height="50"
                                class="rounded-circle border border-2 border-warning my-3 mx-2" alt="">
                              <p class="my-3 mx-2">Nicol Jonseck</p>
                            </div>

                            <div
                              class="d-flex flex-row justify-content-start align-items-center border-bottom border-1 border-white"
                              id="4">
                              <img src="img/users/user1.png" width="50" height="50"
                                class="rounded-circle border border-2 border-warning my-3 mx-2" alt="">
                              <p class="my-3 mx-2">Gerardo Gómez</p>
                            </div>

                            <div
                              class="d-flex flex-row justify-content-start align-items-center border-bottom border-1 border-white"
                              id="5">
                              <img src="img/users/user2.png" width="50" height="50"
                                class="rounded-circle border border-2 border-warning my-3 mx-2" alt="">
                              <p class="my-3 mx-2">Andres López</p>
                            </div>
                            <div
                              class="d-flex flex-row justify-content-start align-items-center border-bottom border-1 border-white"
                              id="6">
                              <img src="img/users/user3.png" width="50" height="50"
                                class="rounded-circle border border-2 border-warning my-3 mx-2" alt="">
                              <p class="my-3 mx-2">Nicol Jonseck</p>
                            </div>

                            <div
                              class="d-flex flex-row justify-content-start align-items-center border-bottom border-1 border-white"
                              id="7">
                              <img src="img/users/user1.png" width="50" height="50"
                                class="rounded-circle border border-2 border-warning my-3 mx-2" alt="">
                              <p class="my-3 mx-2">Gerardo Gómez</p>
                            </div>

                            <div
                              class="d-flex flex-row justify-content-start align-items-center border-bottom border-1 border-white"
                              id="8">
                              <img src="img/users/user2.png" width="50" height="50"
                                class="rounded-circle border border-2 border-warning my-3 mx-2" alt="">
                              <p class="my-3 mx-2">Andres López</p>
                            </div>
                            <div
                              class="d-flex flex-row justify-content-start align-items-center border-bottom border-1 border-white"
                              id="9">
                              <img src="img/users/user3.png" width="50" height="50"
                                class="rounded-circle border border-2 border-warning my-3 mx-2" alt="">
                              <p class="my-3 mx-2">Nicol Jonseck</p>
                            </div>

                          </div>
                        </div>
                        <div class="col-8">

                          <div class="bg-dark d-flex flex-column bg-white p-3 text-white small scroll-vertical">
                            <div id="" class="enviaChat align-self-end my-3" style="width: 90%"> Bienvenido al chat
                              de
                              Fast <span class="" style="color: gray; float: right;">10:50 pm</span></div>
                            <div id="" class="recibirChat align-self-start my-3 " style="width: 90%">Lorem, ipsum
                              dolor
                              sit amet
                              consectetur adipisicing elit. Dolorum excepturi exercitationem eos omnis, animi amet
                              enim
                              provident
                              consequuntur tempore praesentium impedit explicabo. Praesentium labore debitis dicta,
                              recusandae quibusdam
                              asperiores libero architecto quam assumenda doloribus rem officia, odio minus facilis
                              voluptatibus amet
                              suscipit ullam animi consequuntur dignissimos hic temporibus? Nulla, repudiandae.
                              <span class="" style="color: gray; float: right;">10:52 pm</span>
                            </div>
                            <div id="" class="enviaChat align-self-end my-3" style="width: 90%"> Bienvenido al chat
                              de
                              Fast <span class="" style="color: gray; float: right;">10:55 pm</span></div>
                            <div id="" class="recibirChat align-self-start my-3 " style="width: 90%">Lorem ipsum
                              dolor
                              <span class="" style="color: gray; float: right;">10:58 pm</span>
                            </div>
                            <div id="" class="enviaChat align-self-end my-3" style="width: 90%"> Bienvenido al chat
                              de
                              Fast <span class="" style="color: gray; float: right;">11:01 pm</span></div>
                            <div id="" class="recibirChat align-self-start my-3 " style="width: 90%">Lorem ipsum
                              dolor
                              <span class="" style="color: gray; float: right;">11:02 pm</span>
                            </div>
                            <div id="" class="enviaChat align-self-end my-3" style="width: 90%"> Bienvenido al chat
                              de
                              Fast <span class="" style="color: gray; float: right;">11:05 pm</span></div>
                            <div id="" class="recibirChat align-self-start my-3 " style="width: 90%">Lorem ipsum
                              dolor
                              <span class="" style="color: gray; float: right;">11:10 pm</span>
                            </div>
                            <div id="" class="enviaChat align-self-end my-3" style="width: 90%"> Bienvenido al chat
                              de
                              Fast <span class="" style="color: gray; float: right;">11:15 pm</span></div>
                            <div id="" class="recibirChat align-self-start my-3 " style="width: 90%">Lorem ipsum
                              dolor
                              <span class="" style="color: gray; float: right;">11:30 pm</span>
                            </div>
                          </div>

                        </div>

                        <div class="d-flex col-12 col-md-6 align-items-center border-0 rounded w-100 mt-3">
                          <input type="text" class="form-control border-0 bg-dark" id="" placeholder="Mensaje"
                            style=" color:white;">
                          <div class="input-group-text border-0 rounded-none bg-white text-dark">
                            <i class="fas fa-paper-plane"></i>
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

<?php include('template/pie-ayuda.php'); ?>