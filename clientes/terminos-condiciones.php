<?php include('template/cabecera.php'); ?>

<div class="espaciado-encabezado">
  <div class="container text-center">
    <h5 class="fw-bold">Términos y Condiciones</h5>
    <hr>
    <p class="text-justify">
      El presente Términos y Condiciones establece los términos en que Fast usa y protege la información que es
      proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la
      seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual
      usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este
      documento. Sin embargo, esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le
      recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos
      cambios.
      <br>
      <br>

      Información que es recogida
      Nuestro sitio web podrá recoger información personal, por ejemplo: Nombre, información de contacto como su
      dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida
      información específica para procesar algún pedido o realizar una entrega o facturación.
      <br>
      <br>

      Uso de la información recogida
      Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para
      mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios. Es
      posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales,
      nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún
      beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados
      en cualquier momento.
      Fast está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los
      sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no
      autorizado.
      <br>
      <br>

      Cookies
      Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su
      ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico
      web, y también facilita las futuras conexiones recurrentes. Otra función que tienen las cookies es que con ellas
      las webs pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.
      Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta
      información es empleada únicamente para análisis estadístico y después la información se elimina de forma
      permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo, las cookies
      ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de
      usted, a menos de que usted así lo quiera y la proporcione directamente. Usted puede aceptar o negar el uso de
      cookies, sin embargo, la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor
      servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se
      declinan es posible que no pueda utilizar algunos de nuestros servicios.
      <br>
      <br>

      Enlaces a Terceros
      Este sitio web pudiera contener enlaces a otros sitios que pudieran ser de su interés. Una vez que usted de clic
      en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo
      tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios
      terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los
      consulte para confirmar que usted está de acuerdo con estas.
      <br>
      <br>

      Control de su información personal
      En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es
      proporcionada a nuestro sitio web. Cada vez que se le solicite rellenar un formulario, como el de alta de usuario,
      puede marcar o desmarcar la opción de recibir información por correo electrónico. En caso de que haya marcado la
      opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.
      <br>
      <br>

      Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento,
      salvo que sea requerido por un juez con un orden judicial.
      Fast se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.
    </p>
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
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-dark" type="button" onclick="login()">Iniciar
          </button>
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
              href="terminos-condiciones.php">Términos
              y Condiciones.</a></small>
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

<?php include('template/menu-izquierda.php'); ?>
<?php include('template/carrito.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>

<?php include('template/pie-pagina-index.php'); ?>