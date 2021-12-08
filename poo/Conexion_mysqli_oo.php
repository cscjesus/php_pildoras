<?php

/*
 * Document   : newEmptyPHP
 * Created on : 7/12/2021, 09:15:17 AM
 * Author     : liz
 * @author liz
 */
$conexion = new mysqli("localhost","root","","proyecto_jsp");

if($conexion->connect_errno){
    echo"Fallo la conexion " . $conexion->connect_errno;
}

//mysqli_set_charset($conexio, "utf-8");

$conexion->set_charset("utf8");

$sql = "select * from productos";

//$resultados = mysqli_query($conexion, $sql);
$resultados = $conexion->query($sql);

if($conexion->errno){
    die($conexion->error);
}

/*while($row = mysqli_fetch_array($resultados, MYSQL_ASSOC)){
    
}*/
echo"<table>";
//while($fila=$resultados->fetch_array()){
while($fila=$resultados->fetch_assoc()){
     echo"<tr>";
            echo "<td>". $fila['codigoarticulo']."</td><td>". $fila['nombrearticulo']."</td> ";
            echo "<td>". $fila['seccion']."</td><td>". $fila['importado']."</td> ";
            echo "<td>". $fila['precio']."</td><td>". $fila['paisdeorigen']."</td> ";
                        
            echo"</tr>";
}
echo"</table>";
//mysqli_close($conexion);
$conexion->close();


