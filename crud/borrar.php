<?php

/*
 * Document   : borrar
 * Created on : 14/12/2021, 02:12:22 PM
 * Author     : liz
 * @author liz
 */
include 'conexion.php';

$id = $_GET['id'];

$base->query("delete from datos_usuarios where id = $id");
header("Location:index.php");