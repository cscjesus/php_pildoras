<?php

/*
 * Document   : insertar_registro
 * Created on : 4/12/2021, 12:54:06 PM
 * Author     : liz
 * @author liz
 */
$cod =$_GET['c_art'];


include './datos.php';
$conexion = mysqli_connect($host, $user, $pass);
if (mysqli_connect_errno()) {
    echo"Fallo al conectar con la BD";
}
mysqli_select_db($conexion, $db) or die("No se encuentra la BD");
mysqli_set_charset($conexion, "utf8"); //ver acentos

$query = "DELETE FROM productos WHERE codigoarticulo='$cod'";

$result = mysqli_query($conexion, $query);
if (!$result) {
    echo'Error al insertar';
} else {
    //echo"Registro Eliminado<br><br>";
    //echo mysqli_affected_rows($conexion);
    if(mysqli_affected_rows($conexion)==0){
        echo"no hay registros que eliminar";
    }else{
        echo"Se han eliminado ".mysqli_affected_rows($conexion). " registros";
    }
}

mysqli_close($conexion);
?>
