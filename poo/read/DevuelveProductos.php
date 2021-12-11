<?php

/*
 * Document   : DevuelveProductos
 * Created on : 9/12/2021, 02:12:41 PM
 * Author     : liz
 * @author liz
 */

require '../Conexion.php';

class DevuelveProductos extends Conexion{
    public function DevuelveProductos(){
        parent::__construct();
    }
    
    public function get_productos($dato){
        $sql ="select * from productos where paisdeorigen='$dato'";
        $sentencia = $this->conexion_db->prepare($sql);
        $sentencia->execute(array($dato));
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        $this->conexion_db=null;
        return $resultado;
        /*$resultado = $this->conexion_db->
                query("select * from productos where paisdeorigen='$dato'");
        $productos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;*/
    }
}