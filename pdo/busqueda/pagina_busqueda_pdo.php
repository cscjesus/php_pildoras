<!DOCTYPE html>
<!--/*
* Document   : pagina_busqueda_pdo
* Created on : 8/12/2021, 07:56:57 AM
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
            //$buscar = htmlspecialchars($_GET['buscar']);
            $seccion = htmlspecialchars($_GET['seccion']);
            $p_ori = htmlspecialchars($_GET['p_origen']);
            $base = new PDO("mysql:host=localhost;dbname=proyecto_jsp", "root", "");
            //muestra la excepcion, de lo contrario no informa nada
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("set character set utf8");
            //$sql = "select nombrearticulo,seccion, precio,paisdeorigen from productos where nombrearticulo =?";
            //$sql = "select nombrearticulo,seccion, precio,paisdeorigen from productos where nombrearticulo =:n_art";//marcador
            $sql = "select nombrearticulo,seccion, precio,paisdeorigen from productos where seccion =:seccion and paisdeorigen=:origen";//marcador
            $pdo_statemente = $base->prepare($sql);//pdo_statment
            $pdo_statemente->execute(array(":seccion"=>$seccion,":origen"=>$p_ori));//agregar valor al marcador
            while($fila = $pdo_statemente->fetch(PDO::FETCH_ASSOC)){
                echo "Nombre articulo: ".$fila["nombrearticulo"]." Seccion: ".$fila["seccion"]." Precio: ".
                        $fila["precio"]." Pais de origen: ".$fila["paisdeorigen"]."<br/>";
            }
            $pdo_statemente->closeCursor();
        } catch (Exception $e) {
            //die("Error: ".$e->getMessage());
            echo "Linea: " . $e->getLine() ." <br>";
            echo "Codigo: " . $e->getCode();
        }finally{
            $base =null;
        }
        ?>
    </body>
</html>
