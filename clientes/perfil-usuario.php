<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>

<!-- Inicio de Contenido -->
<div class="espaciado-encabezado">
  <div class="container">
    <h5 class="fw-bold">Perfil de Cliente</h5>
    <hr>
    <div class="row ">

      <!-- Inicio Card -->
      <div class="col-xs-12 col-lg-6 d-flex justify-content-center m-0">
        <div class="card fondo-cards" style="width: 30rem;">
          <div class="card-body ">
            <h5 class="card-title">Información personal</h5>

            <!-- Inicio -->
            <div class="d-flex flex-column align-items-center p-3">
              <img src="img/interfaces/perfilPrueba.jpg" class="img-perfil-usuario mb-1" alt="">
              <p class="m-1">Sara Smith</p>
              <div><label for="formFile" class="btn-group btn btn-dark px-5 fw-bold rounded-pill">Editar
                  foto</label>
                <input class="form-control" type="file" id="formFile" style="display: none;">
              </div>
            </div>
            <div class="form-group">
              <label for="nombrePerfil">Nombre:</label>
              <input type="text" class="form-control mb-1" name="" value="Sara" id="nombrePerfil"
                placeholder="Ingrese Nombre">
              <label for="apellidoPerfil">Apellido:</label>
              <input type="text" class="form-control mb-1" name="" value="Smith" id="apellidoPerfil"
                placeholder="Ingrese Apellido">

              <p class="mt-3 d-flex justify-content-center">
                <a class="btn btn-dark px-5 fw-bold rounded-pill" data-bs-toggle="collapse"
                  href="#collapseConfiguracion" role="button" aria-expanded="false"
                  aria-controls="collapseConfiguracion">
                  Configuracion
                </a>
              </p>
              <div class="collapse" id="collapseConfiguracion">
                <div class="card fondo-cards mt-3 card-body">
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

      <!-- Inicio Card -->
      <div class="col-xs-12 col-lg-6 d-flex justify-content-center m-0">
        <div class="card fondo-cards mt-3" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title text-dark">Información de pedidos</h5>

            <!-- Inicio -->
            <p class="mt-3 d-flex justify-content-center">
              <a class="btn btn-warning px-5 fw-bold rounded-pill" data-bs-toggle="collapse" href="#collapsePedido"
                role="button" aria-expanded="false" aria-controls="collapsePedido">
                Ver pedidos
              </a>
            </p>
            <div class="collapse" id="collapsePedido">
              <div
                class="card fondo-cards card-body small mb-3 text-dark text-center d-flex flex-column justify-content-center align-items-center align-content-center">
                <img src="img/categorias/OLIMPO.png" class="img-perfil-negocio mb-1" alt="">
                <p class="m-1">Olimpo</p>
                <p class="m-1">(Tegucigalpa F.M)</p>
                <p class="m-1">07/11/2021</p>
                <a type="button" class="btn btn-warning px-2 rounded-pill">
                  <i class="fas fa-eye"></i>
                </a>
              </div>
              <div
                class="card fondo-cards card-body small mb-3 text-dark text-center d-flex flex-column justify-content-center align-items-center align-content-center">
                <img src="img/categorias/CARRION.png" class="img-perfil-negocio mb-1" alt="">
                <p class="m-1">Carrion</p>
                <p class="m-1">(Tegucigalpa F.M)</p>
                <p class="m-1">07/11/2021</p>
                <a type="button" class="btn btn-warning px-2 rounded-pill">
                  <i class="fas fa-eye"></i>
                </a>
              </div>
              <div
                class="card fondo-cards card-body small mb-3 text-dark text-center d-flex flex-column justify-content-center align-items-center align-content-center">
                <img src="img/categorias/BERSHKA.png" class="img-perfil-negocio mb-1" alt="">
                <p class="m-1">Bershka</p>
                <p class="m-1">(Tegucigalpa F.M)</p>
                <p class="m-1">07/11/2021</p>
                <a type="button" class="btn btn-warning px-2 rounded-pill">
                  <i class="fas fa-eye"></i>
                </a>
              </div>
              <div
                class="card fondo-cards card-body small mb-3 text-dark text-center d-flex flex-column justify-content-center align-items-center align-content-center">
                <img src="img/categorias/OLIMPO.png" class="img-perfil-negocio mb-1" alt="">
                <p class="m-1">Olimpo</p>
                <p class="m-1">(Tegucigalpa F.M)</p>
                <p class="m-1">07/11/2021</p>
                <a type="button" class="btn btn-warning px-2 rounded-pill">
                  <i class="fas fa-eye"></i>
                </a>
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
<!-- Final del Contenido -->

</div>
<?php include('template/menu-izquierda.php'); ?>
<?php include('template/carrito.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>

<?php include('template/cdns.php'); ?>

<?php include('template/pie-pagina.php'); ?>