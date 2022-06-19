<?php
      // proceso para guardar un nuevo registro a la base de datos
      include("basedatos.php");
      $nombre = $_REQUEST['nombre'];
      $capital = $_REQUEST['capital'];
      $idioma_prin = $_REQUEST['idioma_prin'];
      $poblacion = intval($_REQUEST['poblacion']);//solicita entero
      $moneda_prin = $_REQUEST['moneda_prin'];
      $forma_gobierno = $_REQUEST['forma_gobierno'];

      $cadena = "insert into `tabla_pais`( `nombre`, `capital`,
        `idioma_prin`, `poblacion`, `moneda_prin`, `forma_gobierno`) values
        ('%s', '%s', '%s', %d,'%s','%s')";
      $cadena = sprintf($cadena, $nombre, $capital, $idioma_prin, $poblacion,$moneda_prin, $forma_gobierno);
      echo $cadena;
      $consultaBD = $conectaBD -> query($cadena);

      if($consultaBD){
        // si hay existo con la inserción,
        // se realiza un redirect a index.php
        header("Location: index.php");
      }else{
        // si exite un error
        // se captura el error
        // se hace un redirect a nuevo.php
        // además se envía el mensaje de error
        // como parámetro
        $mensaje = $conectaBD -> error;
        header("Location: nuevo_pais.php?error=".$mensaje);
      }
?>