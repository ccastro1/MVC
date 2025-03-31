<?php

require_once "Modelos/Sesion.php";

class ControlSesion
{
    function Inicio()
    {
        Funciones::RevisarSesion("Sesion");

        $sesion = new Sesion();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $datos = $sesion->Ingresar();

            if ($datos["Error"] == 0) {
                $_SESSION["ID"] = $datos["ID"];
                $_SESSION["Usuario"] = $datos["Usuario"];
                $_SESSION["Nombre"] = $datos["Nombre"];
                $_SESSION["Paterno"] = $datos["Paterno"];
                $_SESSION["Materno"] = $datos["Materno"];

                header("Location: " . SITIO);
                exit;
            }

            $sesion->error = $datos["Error"];
            $sesion->mensaje = $datos["Mensaje"];
        }

        Funciones::Vista("Sesion", "Ingreso", $sesion);
    }

    function Salir()
    {
        session_destroy();
        header("Location: " . SITIO . "/Sesion");
    }
}
