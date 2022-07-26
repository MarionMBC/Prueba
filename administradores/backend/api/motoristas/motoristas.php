<?php
header("Content-Type: application/json");
include_once("../../class/motoristas/class-usuario-motorista.php");
switch ($_SERVER['REQUEST_METHOD']) {
   case 'GET':
         if (isset($_GET['pedidos'])) {
            Usuario::verOrdenes($_GET['idDealer']);
         } else if (isset($_GET['entregas'])) {
            Usuario::verEntregas($_GET['idDealer']);
         }
      break;
   case 'POST':
      if (isset($_GET['agregar'])){
         $motorista = json_decode(file_get_contents("php://input"), true);
         $usuario = new Usuario($motorista['idDealer'], $motorista['firstName'], $motorista['lastName'], $motorista['dni'], $motorista['birthDate'], $motorista['img'], $motorista['email'], $motorista['password'], $motorista['direction'], $motorista['phone'], $motorista['gender'], $motorista['orders'], $motorista['delivered'], $motorista['bankAccounts']);
         $usuario ->guardarUsuario();
      } else if (isset($_GET['idOrder']) && isset($_GET['idDealer'])) {
         Usuario::agregarOrden($_GET['idOrder'], $_GET['idDealer']);
      }
      break;
   case 'PUT':
      $input = json_decode(file_get_contents("php://input"), true);
      Usuario::cambiarContrasena($_GET['idDealer'], $input['password']);
      break;
   case 'DELETE':
      Usuario::eliminarOrden($_GET['idOrder'], $_GET['idDealer']);
      break;
}
