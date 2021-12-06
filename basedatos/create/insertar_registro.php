<?php

/*
 * Document   : insertar_registro
 * Created on : 4/12/2021, 12:54:06 PM
 * Author     : liz
 * @author liz
 */
$cod =$_GET['c_art'];
$sec =$_GET['seccion'];
$nom =$_GET['n_art'];
$pre =$_GET['precio'];
$fec =$_GET['fecha'];
$imp =$_GET['importado'];
$por =$_GET['p_orig'];

include '../datos.php';
$conexion = mysqli_connect($host, $user, $pass);
if (mysqli_connect_errno()) {
    echo"Fallo al conectar con la BD";
}
mysqli_select_db($conexion, $db) or die("No se encuentra la BD");
mysqli_set_charset($conexion, "utf8"); //ver acentos

$query = "INSERT INTO productos (codigoarticulo,seccion,nombrearticulo,precio,fecha,importado,paisdeorigen) "
        . " VALUES('$cod','$sec','$nom',$pre,'$fec','$imp','$por')";

$result = mysqli_query($conexion, $query);
if (!$result) {
    echo'Error al insertar';
} else {
    echo"Registro guardado<br><br>";
    echo "<table><tr><td> $cod<td>";
    echo "<td> $sec<td>";
    echo "<td> $nom<td>";
    echo "<td> $pre<td>";
    echo "<td> $fec<td>";
    echo "<td> $imp<td>";
    echo "<td> $por<td></tr></table>";
}

mysqli_close($conexion);
?>
