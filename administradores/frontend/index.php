<?php 
  if(isset($_COOKIE["idDealer"])){
    include_once('./funciones/limpiar-sesion.php');
  }

  if(isset($_COOKIE["idUser"])){
    include_once('./funciones/limpiar-sesion.php');
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

  <link rel="shortcut icon" href="res/ICONO-YELLOW-BLACK.ico">

  <link rel="stylesheet" href="css/main.css">

  <title>Document</title>
</head>

<body class="">
  <div class="container" style="margin-top: 200px">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">

        <div class="card logout" style="width: 25rem; height: 27rem;">
          <div class="card-body d-flex align-items-center">
            <form class="row g-3 needs-validation" novalidate>
              <p class="d-flex justify-content-center mt-5" style="font-size: 100px;"><i
                  class="fas fa-user-circle "></i></p>
              <div class="col-12">
                <label for="validationCustom01" class="form-label fw-bold ">Usuario</label>
                <input type="text" class="form-control logout " id="user" required placeholder="Ingrese su usuario">
                <div class="valid-feedback">
                  ingrese un usuario válido.
                </div>
              </div>
              <div class="col-12">
                <label for="validationCustom02" class="form-label fw-bold ">Contraseña</label>
                <input type="password" class="form-control logout " id="password" required
                  placeholder="Ingrese su contraseña">
                <div class="valid-feedback">
                  Ingrese una contraseña válida.
                </div>
              </div>

              <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-dark px-5 rounded-pill" type="button" onclick="login()">Iniciar
                  Sesion</button>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <script src="js/main.js"></script>
</body>

</html>