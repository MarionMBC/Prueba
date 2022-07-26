<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>

<div class="espaciado-encabezado">
  <div class="container">
    <div class="d-flex flex-column">
      <div class="m-2">
        <h4 class="fw-bolder">Productos</h4>
        <div class="input-group flex-nowrap">
          <input type="text" class="form-control" placeholder="Buscar artículo" aria-label="buscarProducto"
            aria-describedby="addon-wrapping">
          <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search fw-bold"></i></span>
        </div>
        <hr>
      </div>
      <div>
        <div class="d-flex justify-content-around flex-wrap align-items-center" id="vista-productos">

        </div>
        <!-- <div class="d-flex flex-fill justify-content-center mt-5">
          <button id="btn" type="submit" onclick="verMas()" class="btn btn-dark px-5 fw-bold">Ver más</button>
        </div> -->
      </div>
    </div>
  </div>
</div>


<!-- Inicio modal detalle producto -->
<!-- Modal -->
<div class="modal fade" id="detalleProducto" tabindex="-1" aria-labelledby="detalleProducto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalle del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="vista-detalle-producto">

      </div>

    </div>
  </div>
</div>

<?php include('template/menu-izquierda.php'); ?>
<?php include('template/carrito.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>

<?php include('template/cdns.php'); ?>

<script src="js/controlador-productos.js"></script>

<?php include('template/pie-pagina.php'); ?>