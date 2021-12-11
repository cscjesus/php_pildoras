<!--/*
 * Document   : Conexion
 * Created on : 9/12/2021, 02:01:46 PM
 * Author     : liz
 * @author liz
 */-->
<?php
require 'config.php';

//require './config.php';
class Conexion {

    protected $conexion_db;

    public function Conexion() {
        try {
            $this->conexion_db = new PDO("mysql:host=localhost;dbname=proyecto_jsp", "root", "");
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8");
            return $this->conexion_db;
        } catch (Exception $ex) {
            echo "La linea de error es: " . $ex->getLine();
        }
        /*
          $this->conexion_db = new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);
          if($this->conexion_db->connect_errno){
          echo"Fallo al conectar MySQL: " +$this->conexion_db->connect_error;
          return;
          }
          $this->conexion_db->set_charset(DB_CHARSET); */
    }

}
