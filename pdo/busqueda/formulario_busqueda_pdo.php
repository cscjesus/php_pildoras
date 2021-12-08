<!DOCTYPE html>
<!--/*
* Document   : formulario_busqueda
* Created on : 3/12/2021, 07:53:30 AM
* Author     : liz
* @author liz
*/-->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{
                width: 300px;
                margin: auto;
                background-color: #ffc;
                border: 2px solid red;
            }
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form action='pagina_busqueda_pdo.php'>
            <!--<label>Buscar: <input type='text' name='buscar'></label>-->
            <table>
                <tr>
                    <td>Seccion:  </td>
                    <td><input type='text' name='seccion'> </td>
                </tr>
                <tr>
                    <td>Pais de origen:</td>
                    <td><input type='text' name='p_origen'></td>
                </tr>
                <tr>
                    <td colspan="2">
                                    <input type='submit' value='dale!'>

                    </td>
                  
                </tr>
            </table>
            
        </form>
    </body>
</html>
