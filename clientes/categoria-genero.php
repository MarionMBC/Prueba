<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>

<div class="espaciado-encabezado">
  <div class="container">
    <div class="d-flex flex-column">
      <div>
        <p class="fw-bolder fs-4">Género</p>
        <hr>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">

        <a href="categoria-femenino.php" class="text-dark btn">
          <div class="card m-3 text-center d-flex justify-content-center align-items-center fondo-cards"
            style="width: 18rem;">
            <img src="img/interfaces/catFemale.png" class="img-genero" alt="">
            <div class="card-body">
              <h5 class="card-title text-dark">Femenino</h5>

            </div>
          </div>
        </a>

        <a href="categoria-masculino.php" class="text-dark btn">
          <div class="card m-3 text-center d-flex justify-content-center align-items-center fondo-cards"
            style="width: 18rem;">
            <img src="img/interfaces/catMale.png" class="img-genero" alt="">
            <div class="card-body">
              <h5 class="card-title text-dark">Masculino</h5>
            </div>
          </div>
        </a>

      </div>

    </div>
  </div>
</div>

<?php include('template/menu-izquierda.php'); ?>
<?php include('template/carrito.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>

<?php include('template/cdns.php'); ?>

<?php include('template/pie-pagina.php'); ?>