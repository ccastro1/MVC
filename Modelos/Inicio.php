<?php

class Inicio
{
    function Lista()
    {
        $id = 1;

        $conexion = Funciones::Conexion();
        
        $sql = "select * from prueba where id = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param("i", $id);
        $query->execute();
        $registros = $query->get_result();

        return $registros;
    }
}
