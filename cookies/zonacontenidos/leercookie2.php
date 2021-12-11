<!DOCTYPE html>
<!--/*
* Document   : leercookie
* Created on : 11/12/2021, 01:00:43 PM
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
        if (isset($_COOKIE["prueba"])) {
            echo $_COOKIE["prueba"];
        }else{
            echo 'no se ha creado la cookie';
        }
        ?>
    </body>
</html>
