<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php'); ?>
<!-- Inicio de Contenido -->
<div class="espaciado-encabezado">
  <div class="container">
    <h5 class="fw-bold">Editar Datos</h5>
    <hr>
    <div class="row ">

      <div class="col-xs-12 col-lg-6 d-flex justify-content-center mb-3">
        <div class="card fondo-cards" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title">Editar datos personales</h5>
            <div class="d-flex flex-wrap justify-content-sm-start">
              <div class="mb-3 me-1 flex-fill">
                <label for="nombreRep" class="form-label"><span class="small">Nombre y apellido</span></label>
                <input type="text" class="form-control" id="nombreRep" placeholder="Nombre y apellido">
              </div>
              <div class="mb-3 me-1 flex-fill">
                <label for="correoRep" class="form-label"><span class="small">Correo electrónico</span></label>
                <input type="email" class="form-control" id="correoRep" placeholder="Nombre@ejemplo.com">
              </div>
              <div class="mb-3 flex-fill me-1">
                <label for="dniRep" class="form-label"><span class="small">DNI</span></label>
                <input type="text" class="form-control" id="dniRep" placeholder="DNI (sin guiones)">
              </div>
              <div class="mb-3 me-1 flex-fill">
                <label for="fechaNacimientoRep" class="form-label"><span class="small">Fecha de
                    nacimiento</span></label>
                <input type="date" value="" style="color:gray" class="form-control" id="fechaNacimientoRep">
              </div>
            </div>
            <div class="mb-3 flex-fill me-1">
              <label for="direccionRep" class="form-label"><span class="small">Dirección exacta</span></label>
              <textarea class="form-control" id="direccionRep" rows="3"></textarea>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xs-12 col-lg-6 d-flex justify-content-center mb-3">
        <div class="card fondo-cards" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title">Editar datos bancarios</h5>
            <form action="">
              <div class="mb-3 me-1 flex-fill">
                <label for="nombreBancoRep" class="form-label"><span class="small">Banco</span></label>
                <input type="text" class="form-control" id="nombreBancoRep" placeholder="Nombre del banco">
              </div>
              <div class="mb-3 me-1 flex-fill">
                <label for="numCuentaRep" class="form-label"><span class="small">Nro. cuenta</span></label>
                <input type="text" class="form-control" id="numCuentaRep" placeholder="Número de cuenta">
              </div>
              <div class="d-flex flex-fill justify-content-center mt-5">
                <button id="btn" type="button" class="btn btn-warning px-5 fw-bold rounded-pill" data-bs-toggle="modal"
                  data-bs-target="#modalEditar">Actualizar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Final del Contenido -->


<?php include ('template/modal-editar-repartidor.php'); ?>
<?php include('template/menu-izquierda.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>

<?php include('template/cdns.php'); ?>
<!-- Colocar controlador -->

<?php include('template/pie-pagina.php'); ?>