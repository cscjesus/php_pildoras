<?php

/*
 * Document   : conexion
 * Created on : 14/12/2021, 01:32:23 PM
 * Author     : liz
 * @author liz
 */
try {
    $base = new PDO("mysql:host=localhost;dbname=proyecto_jsp", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    //echo"Conexion ok";
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
    echo"Linea del error: " . $e->getLine();
} finally {
    //$base = null;
}
?>