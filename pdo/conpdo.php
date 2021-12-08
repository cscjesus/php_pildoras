<!DOCTYPE html>
<!--/*
* Document   : conpdo
* Created on : 7/12/2021, 01:50:48 PM
* Author     : liz
* @author liz
*/-->
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        try {
            $base = new PDO("mysql:host=localhost;dbname=proyecto_jsp", "root", "");
            echo"Conexion ok";
        } catch (Exception $e) {
            die("Error: ".$e->getMessage());
            //echo $e->getMessage();
        }finally{
            $base =null;
        }
        ?>
    </body>
</html>
