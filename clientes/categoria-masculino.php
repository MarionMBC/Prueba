<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>

<div class="espaciado-encabezado">
  <div class="container">
    <div class="d-flex flex-column">
      <div class="m-2">
        <h4 class="fw-bolder">Masculino</h4>
        <div class="input-group flex-nowrap">
          <input type="text" class="form-control" placeholder="Buscar artículo" aria-label="buscarProducto"
            aria-describedby="addon-wrapping">
          <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search fw-bold"></i></span>
        </div>
        <hr>
      </div>
      <div>
        <div class="d-flex justify-content-around flex-wrap align-items-center" id="vista-subCategorias">

        </div>
        <!-- <div class="d-flex flex-fill justify-content-center mt-5">
          <button id="btn" type="submit" onclick="verMas()" class="btn btn-dark px-5 fw-bold">Ver más</button>
        </div> -->
      </div>
    </div>
  </div>
</div>

<?php include('template/menu-izquierda.php'); ?>
<?php include('template/carrito.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>

<?php include('template/cdns.php'); ?>

<script src="js/controlador-cat-masculino.js"></script>

<?php include('template/pie-pagina.php'); ?>