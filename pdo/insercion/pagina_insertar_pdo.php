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
            $busqueda_seccion = htmlspecialchars($_POST['seccion']);
            $busqueda_nart = htmlspecialchars($_POST['n_art']);
            $busqueda_precio = htmlspecialchars($_POST['precio']);
            $busqueda_fecha = htmlspecialchars($_POST['fecha']);
            $busqueda_importado = htmlspecialchars($_POST['importado']);
            $busqueda_porig = htmlspecialchars($_POST['p_orig']);

            $base = new PDO("mysql:host=localhost;dbname=proyecto_jsp", "root", "");
            //muestra la excepcion, de lo contrario no informa nada
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("set character set utf8");
            //$sql = "select nombrearticulo,seccion, precio,paisdeorigen from productos where seccion =:seccion and paisdeorigen=:origen";//marcador
            $sql = "INSERT INTO productos(codigoarticulo,seccion,nombrearticulo,precio,fecha,importado,paisdeorigen) "
                    . "values(:c_art,:seccion,:n_art,:precio,:fecha,:importado,:p_orig)";
            $pdo_statemente = $base->prepare($sql); //pdo_statment
            $pdo_statemente->execute(
                    array(
                        ":c_art" => $busqueda_cart,
                        ":seccion" => $busqueda_seccion,
                        ":n_art" => $busqueda_nart,
                        ":precio" => $busqueda_precio,
                        ":fecha" => $busqueda_fecha,
                        ":importado" => $busqueda_importado,
                        ":p_orig" => $busqueda_porig)); //agregar valor al marcador

            echo"Registro insertado";
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
