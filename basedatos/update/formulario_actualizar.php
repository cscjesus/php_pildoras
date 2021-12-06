<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <style>

            h1{
                text-align:center;
                color:#00F;
                border-bottom:dotted #0000FF;
                width:50%;
                margin:auto;


            }

            table{
                border:1px solid #F00;
                padding:20px 50px;
                margin-top:50px;
            }

            body{
                background-color:#FFC;
            }


        </style>
    </head>

    <body>
        <?php

        // put your code here
        function ejecuta_busqueda($buscar) {

            include '../datos.php';
            $conexion = mysqli_connect($host, $user, $pass);
            if (mysqli_connect_errno()) {
                echo"Fallo al conectar con la BD";
            }
            mysqli_select_db($conexion, $db) or die("No se encuentra la BD");
            mysqli_set_charset($conexion, "utf8"); //ver acentos
            $query = "select * from productos where codigoarticulo ='$buscar'";

            $result = mysqli_query($conexion, $query);
            if ($result) {
                if (mysqli_num_rows($result) == 0) {
                    echo 'no hay registro relacionado';
                    exit();
                }
                $fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
                echo "<h1>Actualización de Artículos</h1>
<form name='form1' method='get' action='actualizar_registro.php'>
  <table border='0' align='center'>
    <tr>
      <td>Código Artículo</td>
      <td><label for='c_art'></label>
      <input type='text' name='c_art' id='c_art' value=" . $fila['codigoarticulo'] . "></td>
    </tr>
    <tr>
      <td>Sección</td>
      <td><label for='seccion'></label>
      <input type='text' name='seccion' id='seccion' value=" . $fila['seccion'] . "></td>
    </tr>
    <tr>
      <td>Nombre artículo</td>
      <td><label for='n_art'></label>
      <input type='text' name='n_art' id='n_art' value=" . $fila['nombrearticulo'] . "></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for='precio'></label>
      <input type='text' name='precio' id='precio' value=" . $fila['precio'] . "></td>
    </tr>
    <tr>
      <td>Fecha</td>
      <td><label for='fecha'></label>
      <input type='text' name='fecha' id='fecha' value=" . $fila['fecha'] . "></td>
    </tr>
    <tr>
      <td>Importado</td>
      <td><label for='importado'></label>
      <input type='text' name='importado' id='importado' value=" . $fila['importado'] . "></td>
    </tr>
    <tr>
      <td>País de Origen</td>
      <td><label for='p_orig'></label>
      <input type='text' name='p_orig' id='p_orig' value=" . $fila['paisdeorigen'] . "></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align='center'><input type='submit' name='eliminar' id='eliminar' value='Actualizar'></td>
      <td align='center'><input type='reset' name='Borrar' id='Borrar' value='Borrar'></td>
    </tr>
  </table>
</form>";
            } else {
                echo "Error al consultar";
            }

            mysqli_close($conexion);
        }

        if (isset($_GET['buscar'])) {
            $buscar = $_GET['buscar'];
            ejecuta_busqueda($buscar);
        } else {
            $action = $_SERVER['PHP_SELF'];
        }
        ?>


    </body>
</html>