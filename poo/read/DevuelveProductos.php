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
    
    public function get_productos(){
        $resultado = $this->conexion_db->query('select * from productos');
        $productos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;
    }
}