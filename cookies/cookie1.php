<!DOCTYPE html>
<!--/*
* Document   : cookie1
* Created on : 11/12/2021, 12:55:09 PM
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
        //setcookie("prueba", "Esta es la informacion de nuestra primera cookie");
        //setcookie("prueba", "Esta es la informacion de nuestra primera cookie",time()+30);
        //cuarto argumento indica desde donde se puede leer
        setcookie("prueba", "Esta es la informacion de nuestra primera cookie",time()+300,
                "/php_pildoras/cookies/zonacontenidos/");
        ?>
    </body>
</html>
