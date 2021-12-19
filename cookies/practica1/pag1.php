<!DOCTYPE html>
<!--/*
* Document   : pag1
* Created on : 13/12/2021, 10:32:41 AM
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
        if (isset($_COOKIE['idiomaSeleccionado'])) {
            if ($_COOKIE['idiomaSeleccionado'] == 'es') {
                header("Location:spanish.php");
            } elseif ($_COOKIE['idiomaSeleccionado'] == 'en') {
                header("Location:english.php");
            }
        }
        ?>
        <table width="25%" border="0" align="center">
            <tr>
                <td colspan="2" align="center"> <h1>Elige un idioma</h1>

                </td>
            </tr>
            <tr>
                <td align="center">
                    <a href="creaCookie.php?idioma=es">   <img src="" width="90" height="60" alt="spanish"> </a>
                </td>
                <td align="center">
                    <a href="creaCookie.php?idioma=en">   <img src="" width="90" height="60" alt="english"> </a>

                </td>
            </tr>
        </table>
    </body>
</html>
