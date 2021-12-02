<?php

/*
 * Document   : ConectaDB
 * Created on : 1/12/2021, 07:59:04 AM
 * Author     : liz
 * @author liz
 */

$host = "localhost";
$user = "root";
$pass = "";
$db = "proyecto_jsp";

//$conexion = mysqli_connect($host, $user, $pass, $db);
$conexion = mysqli_connect($host, $user, $pass);
if(mysqli_connect_errno()){
    echo"Fallo al conectar con la BD";
}
mysqli_select_db($conexion, $db) or die("No se encuentra la BD");
mysqli_set_charset($conexion,"utf8");//ver acentos

$query = "select * from datospersonales";

$result = mysqli_query($conexion, $query);

while ($fila = mysqli_fetch_array($result)) {
   // echo "$fila[0] $fila[1] $fila[2] $fila[3] $fila[4] $fila[5] $fila[6]<br>";
    echo "$fila[0] $fila[1] $fila[2] $fila[3] <br>";
}
