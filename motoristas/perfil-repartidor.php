<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>

<!-- Inicio de Contenido -->
<div class="espaciado-encabezado">
  <div class="container">
    <h5 class="fw-bold">Perfil de Motorista</h5>
    <hr>
    <div class="row ">

      <!-- Inicio Card -->
      <div class="col-xs-12 col-lg-6 d-flex justify-content-center mb-3">
        <div class="card fondo-cards" style="width: 30rem;">
          <div class="card-body" id="perfil-repartidor">

            <!-- Final -->

          </div>
        </div>
      </div>
      <!-- Final Card -->

      <!-- Inicio Card -->
      <div class="col-xs-12 col-lg-6 d-flex justify-content-center mb-3">
        <div class="card fondo-cards" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title">Información de pedidos</h5>

            <!-- Inicio -->
            <p class="mt-3 d-flex justify-content-center">
              <a onclick="historialPedidos()" class="btn btn-warning px-5 fw-bold rounded-pill" data-bs-toggle="collapse" href="#collapsePedido"
                role="button" aria-expanded="false" aria-controls="collapsePedido">
                Ver pedidos
              </a>
            </p>
            <div class="collapse" id="collapsePedido">
              <hr>
              <h3>Lista de Pedidos:</h3>
              <div id="lista-pedidos">

              </div>
            </div>
            <p class="mt-3 d-flex justify-content-center">
              <a onclick="historialEntregas()" class="btn btn-warning px-5 fw-bold rounded-pill" data-bs-toggle="collapse" href="#collapseEntregas"
                role="button" aria-expanded="false" aria-controls="collapseEntregas">
                Ver entregas
              </a>
            </p>
            <div class="collapse" id="collapseEntregas">
              <hr>
              <h3>Lista de Entregas:</h3>

             <div id="lista-entregas">

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
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>
<?php include('template/cdns.php'); ?>

<!-- Colocar controlador -->
<script src="js/controlador-perfil-repartidor.js"></script>

<?php include('template/pie-pagina.php'); ?>