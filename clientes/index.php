<?php

  if(isset($_COOKIE["idDealer"])){
    include_once('./funciones/limpiar-sesion.php');
  }
    if(isset($_COOKIE["idAdmin"])){
    include_once('./funciones/limpiar-sesion.php');
  }
    
  include('template/cabecera.php');


?>

<div class="espaciado-encabezado" id="inicio">
  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-6">
        <div class="centrar-texto">
          <h1 id="titulo"> ¡Compra lo que quieras!</h1>
        </div>
        <div class="estilo">
          <div class="caja-descripcion centrar-componentes">
            ¡La primera aplicación web que te permite comprar ropa de tus tiendas favoritas, camisas,
            pantalones, vestidos, zapatos, accesorios y más, en un solo sitio, jámas ir de compras había
            sido tan fácil!.
          </div>
          <br><br>
          <button class="pulse-button centrar-componentes" type="button" onclick="verificarInicioSesion()">Comenzar
          </button>
          <div class="container-fluid">
            <div class="row">
              <div class="col-6">
                <div class="caja-social">
                  <img src="img/miniaturas/playstore.png" alt="" id="playstore">
                </div>
              </div>
              <div class="col-6">
                <div class="caja-social">
                  <img src="img/miniaturas/appstore.png" alt="" id="appstore">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-6">
        <div class="d-flex justify-content-center my-5 py-5">
          <div id="box" class="">
            <div class="top"></div>
            <div>
              <span></span>
              <span>
                <i class="tape"></i>
              </span>
              <span></span>
              <span>
                <i class="tape"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" style="margin-top: 100px;">
    <div class="row">
      <div
        class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 mt-3 d-flex flex-column justify-content-center align-items-center align-content-center centrar-texto">

        <div class="card fondo-cards" style="width:18rem;">
          <img src="img/productos/1.jpg" class="card-img-top rounded-imagenes" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>

      </div>
      <div
        class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 mt-3 d-flex flex-column justify-content-center align-items-center align-content-center centrar-texto">

        <div class="card fondo-cards" style="width:18rem;">
          <img src="img/productos/2.jpg" class="card-img-top rounded-imagenes" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>

      </div>

      <div
        class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 mt-3 d-flex flex-column justify-content-center align-items-center align-content-center centrar-texto">

        <div class="card fondo-cards" style="width:18rem;">
          <img src="img/productos/3.jpg" class="card-img-top rounded-imagenes" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>

      </div>

      <div
        class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 mt-3 d-flex flex-column justify-content-center align-items-center align-content-center centrar-texto">

        <div class="card fondo-cards" style="width:18rem;">
          <img src="img/productos/4.jpg" class="card-img-top rounded-imagenes" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>

      </div>

    </div>
  </div>
  <div id="funcionamiento" class="margenes-y">
    <div class="centrar-texto centrar-componentes">
      <h1 id="titulo2"> Funcionamiento de Fast</h1>
    </div>
    <div class="centrar-texto centrar-componentes">
      <h2 id="subtitulo2">¡Tu estilo, cerca de ti! </h2>
    </div>
  </div>
  <br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 centrar-componentes estilo my-3">
        <img class="image-funcionamiento" src="img/miniaturas/ordenar.png" alt="">
        <div class="">
          <h3>1.Realiza tu orden</h3>
          Primero debes crear una cuenta de cliente, tan fácil como ir al apartado de "Registro" y llenar
          los
          datos requeridos.
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 centrar-componentes estilo my-3">
        <img class="image-funcionamiento" src="img/miniaturas/pagar.png" alt="">
        <div class="">
          <h3>2.Realiza tu Pago</h3>
          Para realizar tus pagos usa nuestro sistema seguro, con la utilización de tu tarjeta de débito ó
          crédito previamente registrada.
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 centrar-componentes estilo my-3">
        <img class="image-funcionamiento" src="img/miniaturas/rastrear.png" alt="">
        <div class="">
          <h3>3.Rastrea tu pedido</h3>
          Monitorea tu paquete en tiempo real, desde su posición inicial, hasta el momento de su llegada.
        </div>
      </div>
    </div>
  </div>
</div>

<div id="comercios" class="margenes-y">
  <div>
    <div class="centrar-texto centrar-componentes">
      <h1 id="titulo">Comercios</h1>
    </div>
    <div class="centrar-texto centrar-componentes">
      <h2 id="titulo">¡Compra con nosotros! </h2>
    </div>
  </div>
  <br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-4 col-xs-4 col-6 centrar-componentes estilo">
        <img class="image-comercios img-fluid" src="img/categorias/OLIMPO.png" alt="">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-4 col-xs-4 col-6 centrar-componentes estilo ">
        <img class="image-comercios img-fluid" src="img/categorias/BERSHKA.png" alt="">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-4 col-xs-4 col-6 centrar-componentes estilo">
        <img class="image-comercios img-fluid" src="img/categorias/ADOC.png" alt="">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-4 col-xs-4 col-6 centrar-componentes estilo ">
        <img class="image-comercios img-fluid" src="img/categorias/STRADIVARIUS.jpg" alt="">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-4 col-xs-4 col-6 centrar-componentes estilo ">
        <img class="image-comercios img-fluid" src="img/categorias/CARRION.png" alt="">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-4 col-xs-4 col-6 centrar-componentes estilo ">
        <img class="image-comercios img-fluid" src="img/categorias/UNLIMITED.png" alt="">
      </div>
    </div>
  </div>
</div>


<!--  Pie de página  -->
<div id="pie" class="pie-pagina">
  <div class="container-fluid">
    <div class="row centrar-texto">
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 my-2 centrar-componentes">
        <h4 class="mt-2 encabezado">FAST</h4>
        <a href="#inicio" class="nav-link active text ">Inicio</a>
        <a href="#funcionamiento" class="nav-link active text ">Funcionamiento</a>
        <a href="#comercios" class="nav-link active text ">Comercios</a>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 my-2 centrar-componentes">
        <h4 class="mt-2 encabezado">CONTACTO</h4>
        <a href="" class="nav-link active text ">Sobre Nosotros</a>
        <a href="" class="nav-link active text ">Términos y Condiciones</a>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 my-2 centrar-componentes">
        <h4 class="mt-2 encabezado">REDES SOCIALES</h4>
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <a href=""><img src="img/interfaces/facebookblack.png" class="image-redes" alt=""></a>
            </div>
            <div class="col-6">
              <a href=""><img src="img/interfaces/instagramblack.png" class="image-redes" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Ventana Modal -->
<div class="modal fade" id="modalCarrito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModal">Carrito de Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="contenidoModal">
        ...
      </div>
      <div class="modal-footer" id="pieModal">
        <button type="button" class="btn btn-warning">Pagar</button>
      </div>
    </div>
  </div>
</div>
<!--Final Ventana Modal -->

<!-- Ventana Modal Chat -->
<div class="modal fade" id="modalChat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
  style="border-radius: 25px">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header ">
        <i class="fas fa-user-circle fs-1 mx-3"></i>
        <h5 class="modal-title " id="tituloModalChat">Chat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- d-flex justify-content-center align-items-end align-content-end -->
      <div class="modal-body fondoChat" id="contenidoModalChat">
        <div class="d-flex flex-column flex-fill">
          <div id="enviaChat" class="align-self-end my-3" style="width: 90%"> Bienvenido al chat de Fast <span class=""
              style="color: gray; float: right;">10:50 pm</span></div>
          <div id="recibirChat" class="align-self-start my-3 " style="width: 90%">Lorem, ipsum dolor sit amet
            consectetur adipisicing elit. Dolorum excepturi exercitationem eos omnis, animi amet enim provident
            consequuntur tempore praesentium impedit explicabo. Praesentium labore debitis dicta, recusandae quibusdam
            asperiores libero architecto quam assumenda doloribus rem officia, odio minus facilis voluptatibus amet
            suscipit ullam animi consequuntur dignissimos hic temporibus? Nulla, repudiandae. <span class=""
              style="color: gray; float: right;">10:52 pm</span></div>
          <div id="enviaChat" class="align-self-end my-3" style="width: 90%"> Bienvenido al chat de Fast <span class=""
              style="color: gray; float: right;">10:55 pm</span></div>
          <div id="recibirChat" class="align-self-start my-3 " style="width: 90%">Lorem ipsum dolor <span class=""
              style="color: gray; float: right;">10:58 pm</span></div>
          <div id="enviaChat" class="align-self-end my-3" style="width: 90%"> Bienvenido al chat de Fast <span class=""
              style="color: gray; float: right;">11:01 pm</span></div>
          <div id="recibirChat" class="align-self-start my-3 " style="width: 90%">Lorem ipsum dolor <span class=""
              style="color: gray; float: right;">11:02 pm</span></div>
          <div id="enviaChat" class="align-self-end my-3" style="width: 90%"> Bienvenido al chat de Fast <span class=""
              style="color: gray; float: right;">11:05 pm</span></div>
          <div id="recibirChat" class="align-self-start my-3 " style="width: 90%">Lorem ipsum dolor <span class=""
              style="color: gray; float: right;">11:10 pm</span></div>
          <div id="enviaChat" class="align-self-end my-3" style="width: 90%"> Bienvenido al chat de Fast <span class=""
              style="color: gray; float: right;">11:15 pm</span></div>
          <div id="recibirChat" class="align-self-start my-3 " style="width: 90%">Lorem ipsum dolor <span class=""
              style="color: gray; float: right;">11:30 pm</span></div>

        </div>

      </div>
      <div class="modal-footer" id="pieModalChat">
        <div class="d-flex col-12 col-md-6 align-items-center border rounded w-100">
          <input type="text" class="form-control border-0 " id="" placeholder="Mensaje"
            style="background: none; color:white;">
          <div class="input-group-text border-0 rounded-none" style="background: none; color:white;">
            <i class="fas fa-paper-plane"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Final Ventana Modal -->

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
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Iniciar con:</h2>

          <button class="w-100 py-2 mb-2 btn btn-outline-danger rounded-4" type="button" id="btn-login-gmail">
            <i class="fab fa-google-plus-g"></i> Gmail
          </button>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- Final de Ventana Modal de Login -->

<!-- Inicio Ventana Modal de Registro -->
<div class="modal fade modal-signin py-5" tabindex="-1" role="dialog" id="registrarse">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header rounded-5 p-5 pb-4 border-bottom-0 bg-light">
        <h2 class="fw-bold mb-0">Registrarse</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>

      <div class="modal-body p-5 pt-0">
        <form class="">
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-4" id="correoRegistro" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" id="contrasenaRegistro" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" id="contrasenaRegistrocConfirmacion"
              placeholder="Password">
            <label for="floatingPassword">Contraseña nuevamente</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-dark" type="button">Registrar</button>
          <small class="text-muted">Al hacer clic en Registrarse, acepta los <a class="text-warning"
              href="terminos-condiciones.php">Términos y Condiciones.</a></small>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Iniciar con:</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-danger rounded-4" type="button" id="btn-login-gmail-register">
            <i class="fab fa-google-plus-g"></i> Gmail
          </button>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- Final de Ventana Modal de Registro -->

<?php include('template/pie-pagina-index.php'); ?>