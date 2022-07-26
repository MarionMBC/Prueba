<?php

class Order
{
   private $idOrder;
   private $idDealer;
   private $user;
   private $status;
   private $date;
   private $timeRemaining;
   private $details;

   public function __construct($idOrder, $idDealer, $user, $status, $date, $timeRemaining , $details)
   {
      $this->idOrder = $idOrder;
      $this->idDealer = $idDealer;
      $this->user = $user;
      $this->status = $status;
      $this->date = $date;
      $this->timeRemaining = $timeRemaining;
      $this->details = $details;
   }

   /*obtener ordenes (entregadas, disponibles y pendientes)*/
   public static function obtenerOrdenes()
   {
      $contenido = file_get_contents("../../data/jsons/ordenes/orders.json");
      echo json_encode($contenido);
   }

   /*Obtener órdenes disponibles*/
   public static function obtenerOrdenesDisponibles()
   {
      $archivoOrdenes = file_get_contents("../../data/jsons/ordenes/orders.json");
      $ordenes = json_decode($archivoOrdenes, true);
      $archivoClientes = file_get_contents("../../data/jsons/clientes/users.json");
      $clientes = json_decode($archivoClientes, true);
      $ordenesArray = [];
      foreach ($ordenes as $key => $val) {
         if ($val['status'] == 'Disponible') {
            foreach ($clientes as $key => $value) {
               if ($val['user'] == $value['idUser']) {
                  $ordenesArray[] = array (
                     'idOrder' => $val['idOrder'],
                     'idDealer' => $val['idDealer'],
                     'user' => array (
                        'idUser' => $value['idUser'],
                        'firstName' => $value['firstName'],
                        'lastName' => $value['lastName'],
                        'img' => $value['img'],
                        'address' => $value['address']
                     ),
                     'status' => $val['status'],
                     'date' => $val['date'],
                     'timeRemaining' => $val['timeRemaining'],
                     'details' => $val['details']
                  );
               }
            }
         }
      }
      echo json_encode($ordenesArray);
   }

   /*Obtener órdenes entregadas*/
   public static function obtenerOrdenesEntregadas()
   {
      $archivoOrdenes = file_get_contents("../../data/jsons/ordenes/orders.json");
      $ordenes = json_decode($archivoOrdenes, true);
      $archivoClientes = file_get_contents("../../data/jsons/clientes/users.json");
      $clientes = json_decode($archivoClientes, true);
      $ordenesArray = [];
      foreach ($ordenes as $key => $val) {
         if ($val['status'] == 'Entregada') {
            foreach ($clientes as $key => $value) {
               if ($val['user'] == $value['idUser']) {
                  $ordenesArray[] = array (
                     'idOrder' => $val['idOrder'],
                     'idDealer' => $val['idDealer'],
                     'user' => array (
                        'idUser' => $value['idUser'],
                        'firstName' => $value['firstName'],
                        'lastName' => $value['lastName'],
                        'img' => $value['img'],
                        'address' => $value['address']
                     ),
                     'status' => $val['status'],
                     'date' => $val['date'],
                     'timeRemaining' => $val['timeRemaining'],
                     'details' => $val['details']
                  );
               }
            }
         }
      }
      echo json_encode($ordenesArray);
   }

   /*Obtener órdenes pendientes, así como leer en el JSON de clientes la imagen y nombre del usuario con esa orden*/
   public static function obtenerOrdenesPendientes()
   {
     $archivoOrdenes = file_get_contents("../../data/jsons/ordenes/orders.json");
     $ordenes = json_decode($archivoOrdenes, true);
     $archivoClientes = file_get_contents("../../data/jsons/clientes/users.json");
     $clientes = json_decode($archivoClientes, true);
     $ordenesArray = [];
     foreach ($ordenes as $key => $val) {
        if ($val['status'] == 'Pendiente') {
           foreach ($clientes as $key => $value) {
              if ($val['user'] == $value['idUser']) {
                 $ordenesArray[] = array (
                    'idOrder' => $val['idOrder'],
                    'idDealer' => $val['idDealer'],
                    'user' => array (
                       'idUser' => $value['idUser'],
                       'firstName' => $value['firstName'],
                       'lastName' => $value['lastName'],
                       'img' => $value['img'],
                       'address' => $value['address']
                    ),
                    'status' => $val['status'],
                    'date' => $val['date'],
                    'timeRemaining' => $val['timeRemaining'],
                    'details' => $val['details']

                 );
              }
           }
        }
     }
     echo json_encode($ordenesArray);
   }

   /*Obtener ordenes pendientes y entregadas*/
   public static function obtenerOrdenesPendientesYEntregadas()
   {
      $archivoOrdenes = file_get_contents("../../data/jsons/ordenes/orders.json");
      $ordenes = json_decode($archivoOrdenes, true);
      $archivoClientes = file_get_contents("../../data/jsons/clientes/users.json");
      $clientes = json_decode($archivoClientes, true);
      $ordenesArray = [];
      foreach ($ordenes as $key => $val) {
         if ($val['status'] == 'Pendiente' || $val['status'] == 'Entregada') {
            foreach ($clientes as $key => $value) {
               if ($val['user'] == $value['idUser']) {
                  $ordenesArray[] = array (
                     'idOrder' => $val['idOrder'],
                     'idDealer' => $val['idDealer'],
                     'user' => array (
                        'idUser' => $value['idUser'],
                        'firstName' => $value['firstName'],
                        'lastName' => $value['lastName'],
                        'img' => $value['img'],
                        'address' => $value['address']
                     ),
                     'status' => $val['status'],
                     'date' => $val['date'],
                     'timeRemaining' => $val['timeRemaining'],
                     'details' => $val['details']
                  );
               }
            }
         }
      }
      echo json_encode($ordenesArray);
   }

   /*Obtener orden por id*/
   public static function obtenerOrdenPorId($id)
   {
      $archivo = file_get_contents("../../data/jsons/ordenes/orders.json");
      $ordenes = json_decode($archivo, true);
      foreach ($ordenes as $key => $value) {
         if ($value['idOrder'] == $id) {
            echo json_encode($value);
         }
      }
      return false;
   }

   /*Agregar orden*/
   public function agregarOrden()
   {
      $contenido = file_get_contents("../../data/jsons/ordenes/orders.json");
      $ordenes = json_decode($contenido, true);
      $ordenes[] = [
         'idOrder' => $this->idOrder,
         'idDealer' => $this->idDealer,
         'user' => $this->user,
         'status' => $this->status,
         'date' => $this->date,
         'timeRemaining' => $this->timeRemaining,
         'details' => $this->details
      ];
      file_put_contents("../../data/jsons/ordenes/orders.json", json_encode($ordenes));
      echo json_encode($ordenes);
   }

   public function actualizarOrden()
   {
      $contenido = file_get_contents("../../data/jsons/ordenes/orders.json");
      $ordenes = json_decode($contenido, true);
      foreach ($ordenes as $key => $value) {
         if ($value['idOrder'] == $this->idOrder) {
            $ordenes[$key]['idDealer'] = $this->idDealer;
            $ordenes[$key]['user'] = $this->user;
            $ordenes[$key]['status'] = $this->status;
            $ordenes[$key]['date'] = $this->date;
            $ordenes[$key]['timeRemaining'] = $this->timeRemaining;
            $ordenes[$key]['details'] = $this->details;
         }
      }
      file_put_contents("../../data/jsons/ordenes/orders.json", json_encode($ordenes));
      echo json_encode($ordenes);
   }

   public static function eliminarOrden($idOrder)
   {
      $contenido = file_get_contents("../../data/jsons/ordenes/orders.json");
      $ordenes = json_decode($contenido, true);
      foreach ($ordenes as $key => $value) {
         if ($value['idOrder'] == $idOrder) {
            unset($ordenes[$key]);
         }
      }
      file_put_contents("../../data/jsons/ordenes/orders.json", json_encode($ordenes));
      echo json_encode($ordenes);
   }

  /*Change orden disponible to pendiente*/
  public static function cambiarOrdenDisponiblePendiente($idOrder, $idDealer)
  {
     $contenido = file_get_contents("../../data/jsons/ordenes/orders.json");
     $ordenes = json_decode($contenido, true);
     foreach ($ordenes as $key => $value) {
        if ($value['idOrder'] == $idOrder) {
           $ordenes[$key]['status'] = 'Pendiente';
           $ordenes[$key]['idDealer'] = $idDealer;

        }
     }
     file_put_contents("../../data/jsons/ordenes/orders.json", json_encode($ordenes));
     echo json_encode($ordenes);
  }

  /*Change orden pendiente to entregada*/
  public static function cambiarOrdenPendienteEntregada($idOrder, $idDealer)
  {
     $contenido = file_get_contents("../../data/jsons/ordenes/orders.json");
     $ordenes = json_decode($contenido, true);
     foreach ($ordenes as $key => $value) {
        if ($value['idOrder'] == $idOrder) {
           $ordenes[$key]['status'] = 'Entregada';
           $ordenes[$key]['idDealer'] = $idDealer;

        }
     }
     file_put_contents("../../data/jsons/ordenes/orders.json", json_encode($ordenes));
     echo json_encode($ordenes);
  }

  /*Obtener ordenes de un usuario*/
   public static function obtenerOrdenesPendientesUsuario ($idUser)
   {
      $archivo = file_get_contents("../../data/jsons/ordenes/orders.json");
      $ordenes = json_decode($archivo, true);
      $ordenesArray = array();
      foreach ($ordenes as $key => $value) {
         if ($value['user'] == $idUser && $value['status'] == 'Pendiente') {
            $ordenesArray[] = array(
               'idOrder' => $value['idOrder'],
               'idDealer' => $value['idDealer'],
               'status' => $value['status'],
               'date' => $value['date'],
               'timeRemaining' => $value['timeRemaining'],
               'details' => $value['details']
            );
         }
      }
      echo json_encode($ordenesArray);
   }

   /*Obtener todas las ordenes de un usuario*/
   public static function obtenerOrdenesUsuario ($idUser)
   {
      $archivo = file_get_contents("../../data/jsons/ordenes/orders.json");
      $ordenes = json_decode($archivo, true);
      $ordenesArray = array();
      foreach ($ordenes as $key => $value) {
         if ($value['user'] == $idUser) {
            $ordenesArray[] = array(
               'idOrder' => $value['idOrder'],
               'idDealer' => $value['idDealer'],
               'status' => $value['status'],
               'date' => $value['date'],
               'timeRemaining' => $value['timeRemaining'],
               'details' => $value['details']
            );
         }
      }
      echo json_encode($ordenesArray);
   }


}
