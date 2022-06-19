<?php
  // datos para enlace la base de datos
  $servidor = "localhost";
  $usuario = "root";
  $password = "";
  $base_datos = "basedatos1";
  $conectaBD = new mysqli($servidor, $usuario, $password, $base_datos);
  $conectaBD->set_charset("utf8");
?>