<!DOCTYPE html>
<!--/*
* Document   : insertar_registros
* Created on : 4/12/2021, 06:53:03 AM
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
        
        

            include '../datos.php';
            $conexion = mysqli_connect($host, $user, $pass);
            if (mysqli_connect_errno()) {
                echo"Fallo al conectar con la BD";
            }
            mysqli_select_db($conexion, $db) or die("No se encuentra la BD");
            mysqli_set_charset($conexion, "utf8"); //ver acentos
            
            $query = "INSERT INTO productos (codigoarticulo,seccion,nombrearticulo) VALUES('AR44','DEPORTES','RAQUETA DE BADMINTON')";

            $result = mysqli_query($conexion, $query);
            
            
            mysqli_close($conexion);
        
        ?>
    </body>
</html>
