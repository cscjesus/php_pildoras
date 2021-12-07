<?php

/*
 * Document   : pagina_busqueda
 * Created on : 3/12/2021, 07:53:36 AM
 * Author     : liz
 * @author liz
 */


$buscar = $_GET['buscar'];
include '../datos.php';
$conexion = mysqli_connect($host, $user, $pass);
if (mysqli_connect_errno()) {
    echo"Fallo al conectar con la BD";
}
mysqli_select_db($conexion, $db) or die("No se encuentra la BD");

mysqli_set_charset($conexion, "utf8"); //ver acentos
//paso 1
$sql = "select codigoarticulo,seccion,precio,paisdeorigen from productos where paisdeorigen=?";
//paso 2
$mysql_stmt = mysqli_prepare($conexion, $sql);
//paso 3
$ok = mysqli_stmt_bind_param($mysql_stmt, "s", $buscar);
//paso 4
$ok = mysqli_stmt_execute($mysql_stmt);
if (!$ok) {
    echo"Error al ejecutar la consulta";
} else {
//paso 5
    $ok = mysqli_stmt_bind_result($mysql_stmt, $codigo, $seccion, $precio, $pais);
//paso 6
    echo"Articulos encontrados:<br><br> " ;
    while(mysqli_stmt_fetch($mysql_stmt)){
        echo "$codigo $seccion $precio $pais <br>";
    }
}
mysqli_stmt_close($mysql_stmt);
mysqli_close($conexion);
