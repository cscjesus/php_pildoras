<!--/*
 * Document   : Conexion
 * Created on : 9/12/2021, 02:01:46 PM
 * Author     : liz
 * @author liz
 */-->
<?php
require 'config.php';
//require './config.php';
class Conexion{
    protected $conexion_db;
    public function Conexion(){
        $this->conexion_db = new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);
        if($this->conexion_db->connect_errno){
            echo"Fallo al conectar MySQL: " +$this->conexion_db->connect_error;
            return;
        }
        $this->conexion_db->set_charset(DB_CHARSET);
    }
}


