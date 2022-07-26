<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>
<!--Cuerpo-->

<!-- Inicio de Contenido -->
<div class="espaciado-encabezado">
  <div class="container">
    <h5 class="fw-bold">Lista de Pedidos</h5>
    <hr>
    <div class="row ">

      <div class="col-xs-12 col-lg-6 d-flex justify-content-center mb-3">
        <div class="card fondo-cards" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title">Mapa de Órdenes</h5>
            <div class="d-flex flex-column">
              <div class="mb-1">
                <button type="button" class="btn btn-warning" onclick="geoFindMe()">Ubicación</button>
                <button type="button" class="btn btn-warning" onclick="detenerUbicacion()">Detener</button>

              </div>
              <!-- División o secciona para mostrar coordenadas -->
              <div id='coordenadas' class="centrar-componentes diseño-condenadas"></div>
              <div class="col-12">
                <div id="mapa" class="mb-2">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-lg-6 d-flex justify-content-center mb-3">
        <div class="card fondo-cards" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title" id="ordenes-disponibles">Órdenes disponibles</h5>
              <div id="ordenes-disponibles">
                  <!-- Inicio Item -->

                  <!-- Final Item -->
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-center justify-content-center">
        <div class="col-6">
            <button onclick="ordenesTomadas()" class="btn btn-dark px-5 align-self-center text-center">Ver lista de órdenes</button>
        </div>
    </div>
</div>
<!-- Final del Contenido -->

<?php include('template/menu-izquierda.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>

<!-- Colocar controlador -->
<?php include('template/pie-pagina-mapa.php'); ?>
<script src="js/controlador-lista-pedidos.js"></script>
