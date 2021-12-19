<!DOCTYPE html>
<!--/*
* Document   : destuye_cookie
* Created on : 13/12/2021, 10:57:02 AM
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
       setcookie('nombre_usuario',"juan",time()-1);
       echo"cookie destruida";
                     ?>
    </body>
</html>
