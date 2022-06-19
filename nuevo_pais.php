<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <title>FORMULARIO DE PAIS</title>
  </head>
  <body>
  <?php
          if(isset($_GET['error']) && isset($error[$_GET['error']]))
          echo "<h5>".$error[$_GET['error']]."<h5>";
    ?>

    <h3>Ingrese datos para Pais</h3>
    <div class="miformulario">
        <form action="agrega_pais.php" method="post">
            <label for="nombre">Ingrese el nombre del país</label>
            <input type="text" name="nombre" id="nombre_pais" required/>
            <br/>
            <br/>
            <label for="capital">Ingrese el nombre de la capital</label>
            <input type="text" name="capital" id="capital" required/>
            <br/>
            <br/>
            <label for="idioma_prin">Ingrese el idioma principal del país</label>
            <input type="text" name="idioma_prin" id="idioma_prin" required/>
            <br/>
            <br/>
            <label for="poblacion">Ingrese el total de la población del país</label> 
            <input type="number" name="poblacion" id="number" required/>
            <br/>
            <br/>
            <label for="moneda_prin">Ingrese la moneda principal del país</label>
            <input type="text" name="moneda_prin" id="moneda_prin" required/>
            <br/>
            <br/>
            <label for="forma_gobierno">Ingrese la forma de gobierno del país</label>
            <input type="text" name="forma_gobierno" id="forma_gobierno" required/>
            <br/>
            <br/>

            <input type="submit" name="enviar" id="enviar" value="Guardar Pais" />
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