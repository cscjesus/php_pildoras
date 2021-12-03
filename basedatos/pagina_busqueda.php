<?php

/*
 * Document   : pagina_busqueda
 * Created on : 3/12/2021, 07:53:36 AM
 * Author     : liz
 * @author liz
 */

        include './datos.php';
//require './datos.php';
//$conexion = mysqli_connect($host, $user, $pass, $db);
        $buscar =$_GET['buscar'];
        $conexion = mysqli_connect($host, $user, $pass);
        if (mysqli_connect_errno()) {
            echo"Fallo al conectar con la BD";
        }
        mysqli_select_db($conexion, $db) or die("No se encuentra la BD");
        mysqli_set_charset($conexion, "utf8"); //ver acentos
        $query = "select * from productos where nombrearticulo like '%$buscar%'";

        $result = mysqli_query($conexion, $query);
        echo "<table>";
        //while ($fila = mysqli_fetch_row($result)) {
        while ($fila = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            echo"<tr>";
            echo "<td>". $fila['codigoarticulo']."</td><td>". $fila['nombrearticulo']."</td> ";
            echo "<td>". $fila['seccion']."</td><td>". $fila['importado']."</td> ";
            echo "<td>". $fila['precio']."</td><td>". $fila['paisdeorigen']."</td> ";
                        
            echo"</tr>";
            //echo "$fila[0] $fila[1] $fila[2] $fila[3] <br>";
        }
        echo '</table>';
        mysqli_close($conexion);
