<?php

// cambiar las credenciales y el driver.

class Conexion {

    static function Conectar() {

        $variables = Variables::Instancia();

        $host = $variables->Obtener("Servidor");
        $base = $variables->Obtener("BaseDatos");
        $usuario = $variables->Obtener("Usuario");
        $contrasena = $variables->Obtener("Contrasena");

        $conexion = ["Database" => $base, "UID" => $usuario, "PWD" => $contrasena];
        // $conexion = new mysqli($servidor, $usuario, $contrasena, $base);
        return sqlsrv_connect($host, $conexion); 
    }

}
