<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <title>FORMULARIO DE COMPUTADORAS</title>
  </head>
  <body>
  <?php
          if(isset($_GET['error']) && isset($error[$_GET['error']]))
          echo "<h5>".$error[$_GET['error']]."<h5>";
    ?>

    <h3>Ingrese datos para computadora</h3>
    <div class="miformulario">
        <form action="agrega_computadora.php" method="post">

            <label for="marca">Ingrese datos de la marca</label>
            <input type="text" name="marca" id="marca" required/>
            <br/>
            <br/>
            <label for="procesador">Ingrese procesador de la computadora</label>
            <input type="text" name="procesador" id="procesador" required/>
            <br/>
            <br/>
            <label for="memoria">Ingrese memoria de la computadora</label>
            <input type="text" name="memoria" id="memoria" required/>
            <br/>
            <br/>
            <label for="pulgadas">Ingrese las pulgadas de la computadora</label>
            <input type="number" name="pulgadas" id="pulgadas" step="0.01" required/>
            <br/>
            <br/>
            <label for="color">Ingrese el color de la computadora</label>
            <input type="text" name="color" id="color" required/>
            <br/>
            <br/>
            <label for="disco">Ingrese el disco duro de la computadora</label>
            <input type="text" name="disco" id="disco" required/>
            <br/>
            <br/>

            <input type="submit" name="enviar" id="enviar" value="Guardar computadora" />
        </form>
    </div>

    <hr><br/>
    <div>
        <a href="index.php"><button type ="button" class = "btn">Inicio</button></a>
      
      <a href="nueva_computadora.php"><button type ="button" class = "btn">Computadora</button></a>
      <a href="nuevo_pais.php"><button type ="button" class = "btn">Pais</button></a>
    </div>
  </body>
</html>