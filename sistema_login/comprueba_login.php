<?php

/*
 * Document   : comprueba_login
 * Created on : 10/12/2021, 09:22:21 AM
 * Author     : liz
 * @author liz
 */
try {
    $base = new PDO("mysql:host=localhost;dbname=proyecto_jsp", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$base->exec("SET CHARACTER SET utf8");
    $sql = "SELECT * FROM usuarios_pass WHERE usuarios =:login AND password=:password";
    $resultado = $base->prepare($sql);
    $login = htmlentities(addslashes($_POST['login']));
    $password = htmlentities(addslashes($_POST['password']));

    //binParam cuando se utiliza ?
    //bindValue cuando se utiliza :marcador
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);

    $resultado->execute();
    $numero_registro = $resultado->rowCount();
    if ($numero_registro != 0) {
        //echo'<h2>Adelante!</h2>';
        session_start();//iniciar/crear la sesion para el usuario que se logueo
        $_SESSION['usuario']=$_POST['login'];//guardar la sesion del usuario actual
        header("location:usuarios_registrados1.php");
    } else {
        //redirigir a una pagina
        header("location:login.php");
    }
} catch (Exception $exc) {
    echo $exc->getLine();
    die("Error: " . $exc->getMessage());
}
?>