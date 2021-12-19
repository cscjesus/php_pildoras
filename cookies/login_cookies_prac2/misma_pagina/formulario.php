 <h1>Introduce tus datos</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
                    <td class="izq">Recordar:</td>
                    <td class="der"><input type="checkbox" name="recordar"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Enviar" name="enviar">
                    </td>
                </tr>
            </table>
        </form>

<!--/*
 * Document   : formulario
 * Created on : 11/12/2021, 11:48:59 AM
 * Author     : liz
 * @author liz
 */-->


