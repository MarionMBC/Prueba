<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>

<div class="espaciado-encabezado">
  <div class="container">

    <div class="d-flex flex-column">
      <div class="m-2">
        <h4 class="fw-bolder">Buscar</h4>
        <div class="input-group flex-nowrap">
          <input type="text" class="form-control" placeholder="Buscar artículo" aria-label="buscarProducto"
            aria-describedby="addon-wrapping">
          <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search fw-bold"></i></span>
        </div>
        <hr>
      </div>
      <div>

      </div>
    </div>

    <?php include('template/menu-izquierda.php'); ?>
    <?php include('template/carrito.php'); ?>
    <?php include('template/chat.php'); ?>
    <?php include('template/menu-inferior-movil.php'); ?>

    <?php include('template/cdns.php'); ?>

    <?php include('template/pie-pagina.php'); ?>