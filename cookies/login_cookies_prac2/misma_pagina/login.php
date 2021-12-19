<!DOCTYPE html>
<!--/*
* Document   : login
* Created on : 10/12/2021, 09:13:23 AM
* Author     : liz
* @author liz
*/-->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h1,h2{
                text-align: center;
            }
            table{
                width: 25%;
                background-color: #ffc;
                border:2px dotted #f00;
                margin:auto auto;
            }
            .izq{
                text-align: right;
            }
            .der{
                text-align: left;
            }
            td{
                text-align: center;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <?php
        //echo hash("sha256", "hola");
        #md5 deprecated
        #sha1 deprecated
        #sha256
        #rainbow tables buscar
        #blowfish
        $autenticado = false;
        if (isset($_POST['enviar'])) {
            try {

                $base = new PDO("mysql:host=localhost;dbname=proyecto_jsp", "root", "");
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //$base->exec("SET CHARACTER SET utf8");
                $sql = "SELECT * FROM usuarios_pass WHERE usuarios =:login AND password=:password";
                $resultado = $base->prepare($sql);
                $login = htmlentities(addslashes($_POST['login']));
                $password = htmlentities(addslashes($_POST['password']));

                //binParam cuando se utiliza ?
                //bindValue cuando se utiliza :marcador
                $resultado->bindValue(":login", $login);
                $resultado->bindValue(":password", $password);

                $resultado->execute();
                $numero_registro = $resultado->rowCount();
                if ($numero_registro != 0) {
                    $autenticado = true;
                    if (isset($_POST['recordar'])) {
                        setcookie('nombre_usuario', $_POST['login'], time() + 86400);
                    }
                } else {
                    //redirigir a una pagina
                    //header("location:login.php");
                    echo 'Error. Usuario o password incorrectos';
                }
            } catch (Exception $exc) {
                echo $exc->getLine();
                die("Error: " . $exc->getMessage());
            }
        }
        ?>

        <?php
//        if (!isset($_SESSION['usuario'])) {
//            include 'formulario.php';
//        } else {
//            echo 'Usuario: ' . $_SESSION['usuario'];
//        }
        if (!$autenticado) {
            if (!isset($_COOKIE['nombre_usuario'])) {
                include 'formulario.php';
            }
        }
        if (isset($_COOKIE['nombre_usuario'])) {
            echo 'Usuario: ' . $_COOKIE['nombre_usuario'] . "!";
        } else if ($autenticado) {
            echo 'Usuario: ' . $_POST['login'] . "!";
        }
        ?>
        <h2>CONTENIDO DE LA WEB</h2>
        <table width ="800" border="0">
            <tr>
                <td><img src="al_ie.png" width="300" height="166"></td>
                <td><img src="al_ige_b.png" width="300" height="171"></td>
            </tr>
            <tr>
                <td><img src="ci_ie_b.png" width="300" height="166"></td>
                <td><img src="ci_ige.png" width="300" height="197"></td>
            </tr>
        </table>
        <?php
        if ($autenticado || isset($_COOKIE['nombre_usuario'])) {
            include 'zona_registrados.php';
        }
        ?>
    </body>
</html>
