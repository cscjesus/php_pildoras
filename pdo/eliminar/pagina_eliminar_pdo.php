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
            $busqueda_cart = htmlspecialchars($_POST['c_art']);
            

            $base = new PDO("mysql:host=localhost;dbname=proyecto_jsp", "root", "");
            //muestra la excepcion, de lo contrario no informa nada
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("set character set utf8");
            //$sql = "select nombrearticulo,seccion, precio,paisdeorigen from productos where seccion =:seccion and paisdeorigen=:origen";//marcador
            $sql = "DELETE FROM productos WHERE codigoarticulo=:c_art";
            $pdo_statemente = $base->prepare($sql); //pdo_statment
            $pdo_statemente->execute(
                    array(":c_art" => $busqueda_cart)); //agregar valor al marcador

            echo"Registro eliminado";
            $pdo_statemente->closeCursor();
        } catch (Exception $e) {
            //die("Error: ".$e->getMessage());
            echo "Linea: " . $e->getLine() . " <br>";
            echo "Codigo: " . $e->getCode();
        } finally {
            $base = null;
        }
        ?>
    </body>
</html>

<!--57,58,59-->
