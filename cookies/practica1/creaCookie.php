<?php

/*
 * Document   : creaCookie
 * Created on : 13/12/2021, 10:43:57 AM
 * Author     : liz
 * @author liz
 */
setcookie("idiomaSeleccionado",$_GET['idioma'],time()+86400);
header("Location:ver_cookie.php");
