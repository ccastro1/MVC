<?php

// cambiar las credenciales y el driver.

class Conexion {

    static function Conectar() {

        $variables = Variables::Instancia();

        $host = $variables->Obtener("Host");
        $base = $variables->Obtener("BaseDatos");
        $usuario = $variables->Obtener("Usuario");
        $contrasena = $variables->Obtener("Contrasena");

        $conexion = ["Database" => $base, "UID" => $usuario, "PWD" => $contrasena];
        // $conexion = mysqli_connect($host, $ususario, $contrasena, $baseF);
        return sqlsrv_connect($host, $conexion); 
    }

}
