<!DOCTYPE html>
<!--/*
* Document   : ver_cookie
* Created on : 13/12/2021, 10:49:23 AM
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
        if (!$_COOKIE['idiomaSeleccionado']) {
            header("Location:pag1.php");
        } else if ($_COOKIE['idiomaSeleccionado'] == 'es') {
            header("Location:spanish.php");
        }  else if ($_COOKIE['idiomaSeleccionado'] == 'en') {
            header("Location:english.php");
        }
        ?>
    </body>
</html>
