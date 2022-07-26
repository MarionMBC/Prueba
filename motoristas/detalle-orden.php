<?php include('sesion.php'); ?>
<?php include('template/cabecera-logged.php') ?>
    <!--Cuerpo-->

    <!-- Inicio de Contenido -->
    <div class="espaciado-encabezado">
        <div class="container">
            <h5 class="fw-bold">Detalle Orden</h5>
            <hr>
            <div class="row ">

                <div class="col-xs-12 col-lg-6 d-flex justify-content-center mb-3">
                    <div class="card fondo-cards" style="width: 30rem;">
                        <div class="card-body">
                            <h5 class="card-title">Mapa de Orden</h5>
                            <div class="d-flex flex-column">
                                <div class="mb-1">
                                    <button type="button" class="btn btn-warning" onclick="geoFindMe()">Ubicación</button>
                                    <button type="button" class="btn btn-warning" onclick="detenerUbicacion()">Detener</button>

                                </div>
                                <!-- División o secciona para mostrar coordenadas -->
                                <div id='coordenadas' class="centrar-componentes diseño-condenadas"></div>
                                <div class="col-12">
                                    <div id="mapa" class="mb-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-lg-6 d-flex justify-content-center ">
                    <div class="card fondo-cards" style="width: 30rem;">
                        <div class="card-body">
                            <h5 class="card-title">Detalles Entrega</h5>
                            <div class="d-flex flex-column align-items-center" id="detalle-orden">

                            </div>
                            <hr>
                            <div class="d-flex flex-column align-items-center">
                                <div class=""><i class="fas fa-phone-volume text-warning fa-2x"></i>
                                </div>
                                <div>
                                    <p class="m-0 small">Contactar</p>
                                </div>
                                <div class="mt-2"><i class="fas fa-info-circle text-warning fa-2x"></i></div>
                                <div>
                                    <p class="small m-0">Informar de un problema</p>
                                </div>
                            </div>
                            <hr>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Final del Contenido -->

    <!--Fin contenido-->
<?php include('template/modal-entregado.php') ?>
<?php include('template/menu-izquierda.php'); ?>
<?php include('template/chat.php'); ?>
<?php include('template/menu-inferior-movil.php'); ?>
    <!-- Colocar controlador -->
    <script src="js/controlador-detalle-orden.js"></script>
<?php include('template/pie-pagina-mapa.php'); ?>