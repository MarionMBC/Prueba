<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>

<div class="espaciado-encabezado">
  <div class="container">
    <div class="row">
      <div>
        <h4 class="fw-bold">Categorías</h4>
        <hr>
      </div>

      <div id="bienvenida">
        <h4>Hola XXXX, Bienvenido!</h4>

      </div>

      <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row" id="vista-empresas">
          <div class="col-12 col-xs-6 col-md-6 col-lg-4 my-1 d-flex justify-content-center align-items-center">
            <a href="categoria-genero.php " class="btn">
              <div class="card fondo-cards small d-flex mx-3 justify-content-center align-items-center"
                style="width: 18rem;">
                <img src="img/categorias/OLIMPO.png" class="img-categoria-tienda rounded-circle mt-2" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-bold small text-dark">Tegucigalpa, Honduras, M.D.C</h5>
                  <p class="card-text text-dark">9:00 Am - 5:00 Pm</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-xs-6 col-md-6 col-lg-4 my-1 d-flex justify-content-center align-items-center">
            <a href="categoria-genero.php " class="btn">
              <div class="card fondo-cards small d-flex mx-3 justify-content-center align-items-center"
                style="width: 18rem;">
                <img src="img/categorias/ADOC.png" class="img-categoria-tienda rounded-circle mt-2" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-bold small text-dark">Tegucigalpa, Honduras, M.D.C</h5>
                  <p class="card-text text-dark">9:00 Am - 5:00 Pm</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-xs-6 col-md-6 col-lg-4 my-1 d-flex justify-content-center align-items-center">
            <a href="categoria-genero.php " class="btn">
              <div class="card fondo-cards small d-flex mx-3 justify-content-center align-items-center"
                style="width: 18rem;">
                <img src="img/categorias/BERSHKA.png" class="img-categoria-tienda rounded-circle mt-2" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-bold small text-dark">Tegucigalpa, Honduras, M.D.C</h5>
                  <p class="card-text text-dark">9:00 Am - 5:00 Pm</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-xs-6 col-md-6 col-lg-4 my-1 d-flex justify-content-center align-items-center">
            <a href="categoria-genero.php " class="btn">
              <div class="card fondo-cards small d-flex mx-3 justify-content-center align-items-center"
                style="width: 18rem;">
                <img src="img/categorias/CARRION.png" class="img-categoria-tienda rounded-circle mt-2" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-bold small text-dark">Tegucigalpa, Honduras, M.D.C</h5>
                  <p class="card-text text-dark">9:00 Am - 5:00 Pm</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-xs-6 col-md-6 col-lg-4 my-1 d-flex justify-content-center align-items-center">
            <a href="" onclick="irCategoriaGeneros()" class="btn">
              <div class="card fondo-cards small d-flex mx-3 justify-content-center align-items-center"
                style="width: 18rem;">
                <img src="img/categorias/STRADIVARIUS.jpg" class="img-categoria-tienda rounded-circle mt-2" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-bold small text-dark">Tegucigalpa, Honduras, M.D.C</h5>
                  <p class="card-text text-dark">9:00 Am - 5:00 Pm</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-xs-6 col-md-6 col-lg-4 my-1 d-flex justify-content-center align-items-center">
            <a href="categoria-genero.php " class="btn">
              <div class="card fondo-cards small d-flex mx-3 justify-content-center align-items-center"
                style="width: 18rem;">
                <img src="img/categorias/UNLIMITED.png" class="img-categoria-tienda rounded-circle mt-2" alt="">
                <div class="card-body">
                  <h5 class="card-title fw-bold small text-dark">Tegucigalpa, Honduras, M.D.C</h5>
                  <p class="card-text text-dark">9:00 Am - 5:00 Pm</p>
                </div>
              </div>
            </a>
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

<?php include('template/cdns.php'); ?>

<script src="js/controlador-cat-tiendas.js"></script>

<?php include('template/pie-pagina.php'); ?>