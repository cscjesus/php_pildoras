<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table,td,tr{
                width: 50%;
                border:1px dotted #ff0000;
                
                margin:auto;
            }
        </style>
    </head>
    <body>

        <?php
        /*
         * Document   : ConectaDB
         * Created on : 1/12/2021, 07:59:04 AM
         * Author     : liz
         * @author liz
         */

//$host = "localhost";
//$user = "root";
//$pass = "";
//$db = "proyecto_jsp";
        include './datos.php';
//require './datos.php';
//$conexion = mysqli_connect($host, $user, $pass, $db);
        $conexion = mysqli_connect($host, $user, $pass);
        if (mysqli_connect_errno()) {
            echo"Fallo al conectar con la BD";
        }
        mysqli_select_db($conexion, $db) or die("No se encuentra la BD");
        mysqli_set_charset($conexion, "utf8"); //ver acentos
//$query = "select * from datospersonales";
        $query = "select * from productos";
        //$query = "select * from productos where paisdeorigen='españa'";

        $result = mysqli_query($conexion, $query);
        echo "<table>";
        //while ($fila = mysqli_fetch_row($result)) {
        while ($fila = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            echo"<tr>";
            echo "<td>". $fila['codigoarticulo']."</td><td>". $fila['nombrearticulo']."</td> ";
            echo "<td>". $fila['seccion']."</td><td>". $fila['importado']."</td> ";
            echo "<td>". $fila['precio']."</td><td>". $fila['paisdeorigen']."</td> ";
                        
            echo"</tr>";
            //echo "$fila[0] $fila[1] $fila[2] $fila[3] <br>";
        }
        echo '</table>';
        mysqli_close($conexion);
        ?>
    </body>
</html>