<!DOCTYPE html>
<!--/*
* Document   : index
* Created on : 15/12/2021, 01:05:12 PM
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
        try {
            $base = new PDO("mysql:host=localhost;dbname=proyecto_jsp", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
            
            $tamano_paginas = 3;
            $pagina = 1;
            
            if (isset($_GET['pagina'])) {
                $pagina = $_GET['pagina'];
            }
            
            $empezar_desde = ($pagina - 1) * $tamano_paginas;

            $sql_total = "SELECT nombrearticulo,seccion,precio,paisdeorigen FROM productos where seccion='deportes' ";
            // . " limit 0,3";

            $resultado = $base->prepare($sql_total);
            $resultado->execute(array());
            $num_filas = $resultado->rowCount();

            $total_paginas = ceil($num_filas / $tamano_paginas);
            echo 'Numero de registros de la consulta ' . $num_filas . "<br>";
            echo "Mostramos " . $tamano_paginas . " registros por pagina <br>";
            echo "Mostando la pagina " . $pagina . " de " . $total_paginas . "<br>";

//            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
//                echo"Nombre articulo: " . $registro['nombrearticulo'] . " Seccion: " . $registro['seccion'] . " Precio:" .
//                $registro['precio'] . " Pais: " . $registro['paisdeorigen'] . "<br>";
//            }
            $resultado->closeCursor();

            $sql_limite = "SELECT nombrearticulo,seccion,precio,paisdeorigen FROM productos where seccion='deportes' "
                    . " limit $empezar_desde,$tamano_paginas";

            $resultado = $base->prepare($sql_limite);
            $resultado->execute(array());

            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo"Nombre articulo: " . $registro['nombrearticulo'] . " Seccion: " . $registro['seccion'] . " Precio:" .
                $registro['precio'] . " Pais: " . $registro['paisdeorigen'] . "<br>";
            }
        } catch (Exception $ex) {
            echo "Linea de error: " . $ex->getLine();
        }
        //------------------------------PAGINACION-------------------------//
        for ($i = 1; $i <= $total_paginas; $i++) {
            echo"<a href='?pagina= " . $i . "'>$i </a>";
        }
        ?>
    </body>
</html>
