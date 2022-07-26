<?php
header("Content-Type: application/json");
include_once("../../class/ordenes/class-order.php");
switch ($_SERVER['REQUEST_METHOD']) {
   case 'GET':
      if (isset($_GET['pendientes'])) {
         Order::obtenerOrdenesPendientes();
      } else if (isset($_GET['disponibles'])) {
         Order::obtenerOrdenesDisponibles();
      } else if (isset($_GET['entregadas'])) {
         Order::obtenerOrdenesEntregadas();
      }else if (isset($_GET['pendientesEntregadas'])){
         Order::obtenerOrdenesPendientesYEntregadas();
      } else if (isset($_GET['usuarioPendiente'])) {
         Order::obtenerOrdenesPendientesUsuario($_GET['idUser']);
      } else if ((isset($_GET['usuarioHistorialOrdenes']))) {
         Order::obtenerOrdenesUsuario($_GET['idUser']);
      } else {
         Order::obtenerOrdenes();
      }
      break;
   case 'POST':
      $order = json_decode(file_get_contents("php://input"), true);
      $nuevaOrden = new Order($order['idOrder'], $order['idDealer'], $order['user'], $order['status'], $order['date'], $order['timeRemaining'], $order['details']);
      $nuevaOrden->agregarOrden();
      break;
   case 'PUT':
      if (isset($_GET['actualizar'])) {
         $order = json_decode(file_get_contents("php://input"), true);
         $nuevaOrden = new Order($order['idOrder'], $order['idDealer'], $order['user'], $order['status'], $order['date'], $order['timeRemaining'], $order['details']);
         $nuevaOrden->actualizarOrden();
      } else if (isset($_GET['pendiente'])) {
         Order::cambiarOrdenDisponiblePendiente($_GET['idOrder'] , $_GET['idDealer']);
      } else if (isset($_GET['entregada'])) {
         Order::cambiarOrdenPendienteEntregada($_GET['idOrder'], $_GET['idDealer']);
      }
      break;
   case 'DELETE':
      Order::eliminarOrden($_GET['idOrder']);
      break;
}