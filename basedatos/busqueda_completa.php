<!DOCTYPE html>
<!--/*
* Document   : busqueda_completa
* Created on : 3/12/2021, 08:06:15 AM
* Author     : liz
* @author liz
*/-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        // put your code here
        function ejecuta_busqueda($buscar) {

            include './datos.php';
            $conexion = mysqli_connect($host, $user, $pass);
            if (mysqli_connect_errno()) {
                echo"Fallo al conectar con la BD";
            }
            mysqli_select_db($conexion, $db) or die("No se encuentra la BD");
            mysqli_set_charset($conexion, "utf8"); //ver acentos
            $query = "select * from productos where nombrearticulo like '%$buscar%'";

            $result = mysqli_query($conexion, $query);
            echo "<table>";
            while ($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo"<tr>";
                echo "<td>" . $fila['codigoarticulo'] . "</td><td>" . $fila['nombrearticulo'] . "</td> ";
                echo "<td>" . $fila['seccion'] . "</td><td>" . $fila['importado'] . "</td> ";
                echo "<td>" . $fila['precio'] . "</td><td>" . $fila['paisdeorigen'] . "</td> ";

                echo"</tr>";
            }
            echo '</table>';
            mysqli_close($conexion);
        }

        if (isset($_GET['buscar'])) {
            $buscar = $_GET['buscar'];
            ejecuta_busqueda($buscar);
        } else {
            $action = $_SERVER['PHP_SELF'];
            echo "<form action='$action'>
            <label>Buscar: <input type='text' name='buscar'></label>
            <input type='submit' value='dale!'>
        </form>";
        }
        ?>
    </body>
</html>
