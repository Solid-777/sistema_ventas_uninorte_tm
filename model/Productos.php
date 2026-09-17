<?php
//la clase producto hereda las funciomes de la clase conectar
class Producto extends Conectar
{
    //obtiene todos los productos de la base de datos
    public function get_producto(){
        //establece la concexion con la base de datos
        $conectar = parent::conexion();
        //codifica los caracteres
        parent::set_names();
        //consulta sql para obtetner todos los productos
        $sql ="SELECT * FROM tm_producto WHERE est = 1";
        //prepara la consulta
        $sql = $conectar->prepare($sql);
        //ejecuta
        $sql = execute();
        //obtiene de retorna todos los registros encontrados
        $resultado = $sql->fetchAll();
        return $resultado;
    }
}
?>