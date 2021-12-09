<!DOCTYPE html>
<!--/*
* Document   : leer
* Created on : 9/12/2021, 02:21:04 PM
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
        require './DevuelveProductos.php';
        $productos = new DevuelveProductos();
        $array_productos = $productos->get_productos();
        
        foreach($array_productos as $row)
        {
            echo"<table><tr><td>";
            echo $row['codigoarticulo'] ."</td><td>";
            echo $row['nombrearticulo'] ."</td><td>";
            echo $row['seccion'] ."</td><td>";
            echo $row['precio'] ."</td><td>";
            echo $row['fecha'] ."</td><td>";
            echo $row['importado'] ."</td><td>";
            echo $row['paisdeorigen'] ."</td><td>";
            echo"</td></tr></table>";
        }
        ?>
    </body>
</html>
