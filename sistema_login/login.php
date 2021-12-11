<!DOCTYPE html>
<!--/*
* Document   : login
* Created on : 10/12/2021, 09:13:23 AM
* Author     : liz
* @author liz
*/-->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h1{
                text-align: center;
            }
            table{
                width: 25%;
                background-color: #ffc;
                border:2px dotted #f00;
                margin:auto auto;
            }
            .izq{
                text-align: right;
            }
            .der{
                text-align: left;
            }
            td{
                text-align: center;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Introduce tus datos</h1>
        <form action="comprueba_login.php" method="post">
            <table>
                <tr>
                    <td class="izq">
                        Login:
                    </td>
                    <td class="der">
                        <input type="text" name="login" id="">
                    </td>
                </tr>
                <tr>
                    <td class="izq">Password</td>
                    <td class="der"><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Enviar" name="enviar">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
