<?php
      // proceso para guardar un nuevo registro a la base de datos
      include("basedatos.php");
      $marca = $_REQUEST['marca'];
      $procesador = $_REQUEST['procesador'];
      $memoria = $_REQUEST['memoria'];
      $pulgadas = floatval($_REQUEST['pulgadas']);
      $color = $_REQUEST['color'];
      $disco = $_REQUEST['disco'];

      $cadena = "insert into `tabla_computadora`( `marca`, `procesador`,
        `memoria`, `pulgadas`, `color`, `disco`) values
        ('%s', '%s',  '%s', %f, '%s', '%s');";
      $cadena = sprintf($cadena, $marca, $procesador,
      $memoria, $pulgadas, $color, $disco);
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
        header("Location: nueva_computadora.php?error=".$mensaje);
      }
?>