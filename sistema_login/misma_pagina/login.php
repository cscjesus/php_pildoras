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
                    //echo'<h2>Adelante!</h2>';
                    session_start(); //iniciar/crear la sesion para el usuario que se logueo
                    $_SESSION['usuario'] = $_POST['login']; //guardar la sesion del usuario actual
                    //header("location:usuarios_registrados1.php");
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
       
        if (!isset($_SESSION['usuario'])) {
            include 'formulario.php';
        }else{
            echo 'Usuario: '. $_SESSION['usuario'];
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
        // put your code here
        ?>
    </body>
</html>
