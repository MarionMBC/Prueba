<?php include('template/cabecera.php'); ?>

<!-- Inicio de Contenido -->
<div class="espaciado-encabezado">
  <div class="container">
    <h5 class="fw-bold">Formulario de Aplicación</h5>
    <hr>
    <div class="row ">

      <div class="col-xs-12 col-lg-6 d-flex justify-content-center mb-3">
        <div class="card fondo-cards" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title">Datos personales</h5>
            <div class="d-flex flex-wrap justify-content-sm-start">
              <div class="mb-3 me-1 flex-fill">
                <label for="nombreRep" class="form-label"><span class="small">Nombre y apellido</span></label>
                <input type="text" class="form-control" id="nombreRep" placeholder="Nombre y apellido">
              </div>
              <div class="mb-3 me-1 flex-fill">
                <label for="correoRep" class="form-label"><span class="small">Correo electrónico</span></label>
                <input type="email" class="form-control" id="correoRep" placeholder="Nombre@ejemplo.com">
              </div>
              <div class="mb-3 me-1 flex-fill">
                <label for="correoRep" class="form-label"><span class="small">Número Telefónico</span></label>
                <input type="number" class="form-control" id="telefonoRep" placeholder="Ingrese su número">
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

      <div class="col-xs-12 col-lg-6 d-flex justify-content-center ">
        <div class="card fondo-cards" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title">Datos bancarios</h5>
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
                <button id="btn" type="button" class="btn btn-dark px-5 fw-bold rounded-pill" data-bs-toggle="modal"
                  data-bs-target="#modalFormulario">Guardar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Inicio Ventana Modal de Login -->
<div class="modal fade modal-signin py-5" tabindex="-1" role="dialog" id="inicioSesion">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 rounded-5 border-bottom-0 bg-white text-dark">
        <h2 class="fw-bold mb-0">Iniciar Sesión</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>

      <div class="modal-body p-5 pt-0">
        <form class="">
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-4" id="user" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" id="password" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-dark" type="button" onclick="login()">Iniciar</button>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- Final de Ventana Modal de Login -->
<!-- Final del Contenido -->

<?php include('template/menu-izquierda.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

<script type="module" src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>

<script type="module" src="https://www.gstatic.com/firebasejs/8.10.0/firebase-auth.js"></script>

<script src="js/controlador-index.js"></script>
<script src="js/main.js"></script>
</body>

</html>