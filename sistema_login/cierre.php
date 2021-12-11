<?php

/*
 * Document   : cierre
 * Created on : 10/12/2021, 12:31:05 PM
 * Author     : liz
 * @author liz
 */
session_start();//reanudar la sesion
session_destroy();//eliminar la sesion
header("location:login.php");