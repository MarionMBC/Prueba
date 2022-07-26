<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>


<!--Inicio del Contenido-->
<div class="espaciado-encabezado">
  <div class="container">
    <h5 class="fw-bold">Registro de Tarjeta</h5>
    <hr>
    <div class="row d-flex justify-content-center">
      <div class="card" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title">Datos de la tarjeta</h5>
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <label for="inputNumTarjeta" class="form-label">N° Tarjeta</label>
              </div>
              <div class="col-12 mb-3">
                <div class="d-flex col-12 align-items-center border rounded">
                  <input type="text" class="form-control border-0" id="inputNumTarjeta" placeholder="__-__-__-__">
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
                  <input type="text" class="form-control border-0" id="inputCCV" placeholder="Ingrese el CCV">
                </div>
              </div>
              <div class="col-md-6 col-xs-12 mb-3">
                <label for="inputNombre" class="form-label">Nombre</label>
                <div class="border rounded-2">
                  <input type="text" class="form-control border-0" id="inputNombre" placeholder="Ingrese el Nombre">
                </div>
              </div>
              <div class="col-md-6 col-xs-12 mb-3">
                <label for="inputApellido" class="form-label">Apellido</label>
                <div class="border rounded-2">
                  <input type="text" class="form-control border-0" id="inputApellido" placeholder="Ingrese el Apellido">
                </div>
              </div>
              <div class="d-flex colum justify-content-center my-3">
                <img src="img/interfaces/registroTarjeta.svg" alt="">
              </div>

            </div>

            <div class="d-flex justify-content-center">
              <div class="row">
                <button class="btn-dark rounded-pill py-1 px-5">Continuar</button>
              </div>
            </div>
            <br><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Final del Contenido-->

  <?php include('template/menu-izquierda.php'); ?>
  <?php include('template/carrito.php'); ?>
  <?php include('template/chat.php'); ?>
  <?php include('template/menu-inferior-movil.php'); ?>

  <?php include('template/cdns.php'); ?>

  <?php include('template/pie-pagina.php'); ?>