<?php
header("Content-Type: application/json");
include_once("../../class/categorias/class-store.php");
switch ($_SERVER['REQUEST_METHOD']) {
   case 'GET': // Obtener Tienda
      if (isset($_GET['idStore'])) {
         Store::obtenerTienda($_GET['idStore']);
      } else {
         Store::obtenerTiendas();
      }
      break;
   case 'POST': // Crear Tienda
      $put = json_decode(file_get_contents("php://input"), true);
      $data = new Store($put['idStore'], $put['name'], $put['img'], $put['address'], $put['phone'], $put['products']);
      $data->anadirTienda();
      break;
   case 'PUT': // Actualizar Tienda
      $put = json_decode(file_get_contents('php://input'), true);
      $tienda = new Store($put['idStore'], $put['name'], $put['img'], $put['address'], $put['phone'], $put['products']);
      $tienda->actualizarTienda();
      break;
   case 'DELETE': // Eliminar Tienda
      Store::eliminarTienda($_GET['idStore']);
      break;
}