<?php

class Sesion
{
    public $usuario;
    public $contrasena;
    public $error;
    public $mensaje;

    function __construct()
    {
        $this->usuario = filter_input(INPUT_POST, "usuario");
        $this->contrasena = filter_input(INPUT_POST, "contrasena");
    }

    function Ingresar()
    {
        $conexion = Funciones::Conexion();

        $sentencia = "SELECT ID,
                             Usuario,
                             Nombre,
                             Paterno,
                             Materno,
                             password Contrasena
                      FROM   usuarios
                      WHERE  usuario = ?";

        $consulta = $conexion->prepare($sentencia);
        $consulta->bind_param("s", $this->usuario);

        try {
            $consulta->execute();
            $datos = $consulta->get_result()->fetch_assoc();

            if ($datos == null || !password_verify($this->contrasena, $datos["Contrasena"])) {
                $datos["Error"] = 1;
                $datos["Mensaje"] = "Usuario o ontraseña incorrecta";
            } else
                $datos["Error"] = 0;

            return $datos;
        } catch (Exception $error) {
            $datos["Error"] = 1;
            $datos["Mensaje"] = $error->getMessage();

            return $datos;
        }
    }
}
