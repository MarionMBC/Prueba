<?php include('template/cabecera.php'); ?>

<div class="container espaciado-encabezado">
  <h4 class="fw-bold">Sobre Nosotros</h4>
  <hr>

  <p class="text-justify">Fast es una empresa hondureña de comercio electrónico de moda rápida B2C. La empresa tiene
    un enfoque generalizado para todas aquellas personas que quieran vestir con la mejor moda del país, ofreciendo
    artículos para mujer, hombre, ropa de niño, accesorios, zapatos, bolsos y, en general, una diversidad de
    productos exclusivos de calidad y confort que le dan un estilo diferente a nuestros clientes. El servicio de
    Fast, abarca el mercado de la moda de empresas nacionales e internacionales. La marca se fundó en 2012, y desde
    entonces ha mantenido la filosofía de que "todo el mundo puede disfrutar de la belleza de la moda." Su actividad
    abarca más de 10 departamentos en todo el país.</p>

  <h4>Nuestra Misión</h4>
  <p class="text-justify">
    Fast ofrece las últimas tendencias para mujeres y jóvenes de las empresas mas reconocidas del país, a unos
    precios
    más que atractivos. Fast es fiel a la
    idea de que "todo el mundo tiene derecho a disfrutar de la belleza de la moda". Fast es capaz de llevar las
    últimas
    tendencias basadas en la moda global y llevar esos estilos al mercado. Por tanto, si está buscando un estilo
    bohemio, camisetas gráficas, blusas estampadas o ropa de baño chic, Fast es su tienda. El objetivo es ofrecer
    productos de calidad con estilo, a precios atractivos para todos los usuarios del mundo.
  </p>

  <h4>Dónde Puede Encontrarnos</h4>
  <p class="text-justify">
    Fast envía ahora a más de 10 departamentos a nivel nacional. Nuestra web está disponible para todo Honduras, por
    lo
    que Fast realiza los envíos desde uno de los
    muchos almacenes que tenemos disponibles en el pais, el que se sitúe más próximo a destino. Fast continúa
    prosperando debido, en parte, a los valores de la compañía para controlar la excelencia de la producción
    interna.
    Fast tiene como objetivo proporcionar los artículos más a la moda, al mismo tiempo que se dedica a proporcionar
    calidad, valor y servicio.
  </p>

  <img src="./img/interfaces/mapa-honduras.png" alt="" class="w-100">
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
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-dark" type="button" onclick="login()">Iniciar
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Final de Ventana Modal de Login -->


<?php include('template/menu-izquierda.php'); ?>
<?php include('template/carrito.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>

<script type="module" src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>

<script type="module" src="https://www.gstatic.com/firebasejs/8.10.0/firebase-auth.js"></script>

<script src="js/controlador-index.js"></script>
<script src="js/main.js"></script>

</body>

</html>