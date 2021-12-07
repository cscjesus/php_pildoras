<?php

/*
 * Document   : insertar_registro
 * Created on : 4/12/2021, 12:54:06 PM
 * Author     : liz
 * @author liz
 */
//$cod = mysqli_real_escape_string($_GET['c_art']);//para evitar inyeccion sql
//$sec =$_GET['seccion'];
//$nom =$_GET['n_art'];
//$pre =$_GET['precio'];
//$fec =$_GET['fecha'];
//$imp =$_GET['importado'];
//$por =$_GET['p_orig'];

require '../datos.php';
$conexion = mysqli_connect($host, $user, $pass);

//de forma obligatoria despues de la conexion
$cod = mysqli_real_escape_string($conexion, $_GET['c_art']); //para evitar inyeccion sql
$sec = mysqli_real_escape_string($conexion, $_GET['sec']);
$nom = mysqli_real_escape_string($conexion, $_GET['n_art']);
$pre = mysqli_real_escape_string($conexion, $_GET['pre']);
$fec = mysqli_real_escape_string($conexion, $_GET['fec']);
$imp = mysqli_real_escape_string($conexion, $_GET['imp']);
$por = mysqli_real_escape_string($conexion, $_GET['p_orig']);

$conexion = mysqli_connect($host, $user, $pass);
if (mysqli_connect_errno()) {
    echo"Fallo al conectar con la BD";
}
mysqli_select_db($conexion, $db) or die("No se encuentra la BD");

mysqli_set_charset($conexion, "utf8"); //ver acentos
//paso 1
$sql = "INSERT INTO productos (codigoarticulo,seccion,nombrearticulo,precio,fecha,importado,paisdeorigen) "
        . " VALUES(?,?,?,?,?,?,?)";
//. " VALUES('$cod','$sec','$nom',$pre,'$fec','$imp','$por')";
//paso 2
$mysql_stmt = mysqli_prepare($conexion, $sql);
//paso 3
$ok = mysqli_stmt_bind_param($mysql_stmt, "sssdsss", $cod, $sec, $nom, $pre, $fec, $imp, $por);
//paso 4
$ok = mysqli_stmt_execute($mysql_stmt);
if (!$ok) {
    echo"Error al ejecutar la consulta". mysqli_error($conexion);
} else {
//paso 5
    //$ok = mysqli_stmt_bind_result($mysql_stmt, $codigo, $seccion, $precio, $pais);
//paso 6
    echo"Articulo agregado<br><br> ";
   /* while (mysqli_stmt_fetch($mysql_stmt)) {
        echo "$codigo $seccion $precio $pais <br>";
    }*/
}
mysqli_stmt_close($mysql_stmt);

mysqli_close($conexion);
/*
  Carácter 	Descripción
  i             la variable correspondiente es de tipo entero
  d             la variable correspondiente es de tipo double
  s             la variable correspondiente es de tipo string
  b             la variable correspondiente es un blob y se envía en paquetes

 */
?>
