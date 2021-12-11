<!DOCTYPE html>
<!--/*
* Document   : usuarios_registrados1
* Created on : 10/12/2021, 09:55:06 AM
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
        session_start(); //iniciar o reanudar la sesion
        //para poder recuperar el valor guardado en otra pagina
        if (!isset($_SESSION['usuario']))
            header("location:login.php");
        ?>
        <h1>Bienvenidos usuarios</h1>
        <?php
        echo "Usuario: " . $_SESSION['usuario'] . "</br>";
        ?>
        <p><a href="cierre.php">Cerrar sesion</a></p>

        <p>Esto es informacion solo para usuarios registrados</p>
        <a href="usuarios_registrados1.php">Regresar</a>
    </body>
</html>
