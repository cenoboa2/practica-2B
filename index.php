<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"> </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </script>
    <title>Uso básico de PHP</title>
  </head>
  <body>

    <h3>Listado de Computadoras y Países</h3>
    <div id="miaccordion">
      <h3>Listado de Computadoras</h3>
      <div>
        <table id="tabla_computadora">
          <thead>
            <tr>
              <td>Marca</td>
              <td>Procesador</td>
              <td>Memoria</td>
              <td>Pulgadas</td>
              <td>Color</td>
              <td>Disco duro</td>
            </tr>
          </thead>
          <?php
          include("basedatos.php");
          function convertirMayuscula($dato){
              // función que permite
              // pasar una cadena a mayúscula
              return strtoupper($dato);
            }
            // se realizar la consulta a la base de datos
            $consultaBD = $conectaBD -> query("select * from tabla_computadora");
            while ($registro = $consultaBD -> fetch_array(MYSQLI_ASSOC)){
              $formato = "<tr>
              <td>%s</td>
              <td>%s</td>
              <td>%s</td>
              <td>%s</td>
              <td>%s</td>
              <td>%s</td>
              </tr>";
              // se agrega una fila a la tabla HTML
              echo sprintf($formato,
              convertirMayuscula($registro['marca']),
              $registro['procesador'],
              $registro['memoria'],
              $registro['pulgadas'],
              $registro['color'],
              convertirMayuscula($registro['disco']));
            }
            ?>
          </table>
      </div>
      <h3>Listado de Países</h3>
      <div>
        <table id="tabla_pais">
          <thead>
            <tr>
              <td>Nombre Pais</td>
              <td>Capital</td>
              <td>Idioma principal</td>
              <td>Población</td>
              <td>Moneda principal<u/td>
              <td>Forma de gobierno</td>
            </tr>
          </thead>
          <?php
          // se realizar la consulta a la base de datos
          $consultaBD = $conectaBD -> query("select * from tabla_pais");
          while($registro = $consultaBD -> fetch_array(MYSQLI_ASSOC)){
            $formato = "<tr>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%d</td>
            <td>%s</td>
            <td>%s</td>
            </tr>";
            // se agrega una fila a la tabla HTML
            echo sprintf($formato,
            convertirMayuscula($registro['nombre']),
            $registro['capital'],
            $registro['idioma_prin'],
            $registro['poblacion'],
            $registro['moneda_prin'],
            $registro['forma_gobierno']);
          }
          ?>
        </table>
      </div>
    </div>
    <hr><br/>
    <div>
        <a href="index.php"><button type ="button" class = "btn">Inicio</button></a>
      
      <a href="nueva_computadora.php"><button type ="button" class = "btn">Computadora</button></a>
      <a href="nuevo_pais.php"><button type ="button" class = "btn">Pais</button></a>
    </div>
    <script type="text/javascript">
      $(document).ready( function () {
        $('#tabla_computadora').DataTable();
        $('#tabla_pais').DataTable();
        $( "#miaccordion" ).accordion({
              collapsible: true
        });
      } );
    </script>
  </body>
</html>