<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>

<div class="container-fluid espaciado-encabezado">
  <div class="row">

    <div class="col-xs-12 col-lg-12 d-flex justify-content-center mb-3">
      <div class="card fondo-cards" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">Mapa</h5>
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

  </div>
</div>


<?php include('template/menu-izquierda.php'); ?>
<?php include('template/carrito.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>

<?php include('template/pie-pagina-mapa.php'); ?>