<!DOCTYPE html>
<!--/*
* Document   : usuarios_registrados1
* Created on : 10/12/2021, 09:55:06 AM
* Author     : liz
* @author liz
*/-->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        session_start();//iniciar o reanudar la sesion
        //para poder recuperar el valor guardado en otra pagina
        if(! isset($_SESSION['usuario']))
             header("location:login.php");
        ?>
        <h1>Bienvenidos usuarios</h1>
        <?php
        echo "Hola: " . $_SESSION['usuario']."</br>";
        ?>
        <p><a href="cierre.php">Cerrar sesion</a></p>
        <p>Esto es informacion solo para usuarios registrados</p>
        <table>
            <tr>
                
                <td colspan="3">Zona ususario Registrados</td>
            </tr>
            <tr>
                
                <td><a href="usuarios_registrados2.php">Pagina1</a></td>
                <td><a href="usuarios_registrados3.php">Pagina2</a></td>
                <td><a href="usuarios_registrados3.php">Pagina3</a></td>
            </tr>
        </table>
    </body>
</html>
