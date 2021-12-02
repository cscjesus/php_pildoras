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
$db = "curso";

$conexion = mysqli_connect($host, $user, $pass, $db);
$query = "select * from users";

$result = mysqli_query($conexion, $query);

while ($fila = mysqli_fetch_array($result)) {
    echo "$fila[0] $fila[1] $fila[2] $fila[3] $fila[4] $fila[5] $fila[6]<br>";
}
