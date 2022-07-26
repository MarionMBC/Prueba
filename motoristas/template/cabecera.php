<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fast</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="">
  <link rel="shortcut icon" href="res/ICONO-YELLOW-BLACK.ico">
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <link rel="stylesheet" href="css/paginas-dinamicas.css">
  <link rel="stylesheet" href="css/box.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="fondo-body">
  <!-- Navbar-Oficial -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="inicio">
    <div class="container-fluid">
      <a href="index.php"><img src="img/miniaturas/LOGO Z.png" alt="" style="width: 150px; height: auto;"> </a>
      <button class="navbar-toggler" type="" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""><i class="fas fa-bars fs-1"></i></span>
      </button>
      <div class="collapse navbar-collapse text-center " id="navbarSupportedContent">
        <form class="justify-content-evenly ms-0" id="social-navbar">
          <a href=""><img src="img/interfaces/facebookblack.png" class="mx-2" alt="" style="width: 40px;"></a> <a
            href=""><img src="img/interfaces/instagramblack.png" class="mx-2" alt="" style="width: 40px;"></a>
        </form>
        <div class="position-rigth">
          <ul class="mb-2 mb-lg-0 p-0">
            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center mt-2">
              <li class="item-menu">
                <a class="nav-link active text" aria-current="page" href="about.php">Acerca de Nosotros</a>
              </li>
              <li class="item-menu">
                <a class="nav-link active text" aria-current="page" href="rep-formulario-aplicacion.php">Trabaja con
                  Nosotros</a>
              </li>
              <li class="item-menu" id="link-inicio-sesion">
                <a class="nav-link active text" aria-current="page" href="" data-bs-toggle="modal"
                  data-bs-target="#inicioSesion">Iniciar Sesión</a>
              </li>

              <li class=" item-menu" id="logout">

              </li>
            </div>
          </ul>
        </div>
        <div class="position-right mx-3" id="vista-img-perfil">
          <a href="perfil-repartidor.php"><i class="fas fa-user-circle text-light fs-1"></i></a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Final-Navbar-Oficial -->