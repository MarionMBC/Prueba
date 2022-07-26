<?php

  include_once('./funciones/limpiar-sesion.php');
  
  session_start();
  session_destroy();
  header("Location: index.php");

?>