<?php

require_once $variables->Obtener("RutaModelos") . 'Sesion.php';

class ControlSesion {

    function Inicio() {
        $variables = Variables::Instancia();

        if (!empty($_SESSION["Usuario"])) {
            header("Location: " . $variables->Obtener("Servidor"));
        }

        $funcion = new Sesion();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $datos = $funcion->Ingresar();

            if ($datos["Total"] === 1) {
                $_SESSION["ID"] = $datos["ID"];
                $_SESSION["Usuario"] = $datos["Nombre"];
                header("Location: " . $variables->Obtener("Servidor"));
            } else {
                $variables->Asignar("Mensaje", "Usuario o contraseña incorrecta");
            }
        }
        return Funcion::Vista("Sesion", "Ingresar", $funcion);
    }

    function Salir() {
        $variables = Variables::Instancia();
        session_destroy();
        header("Location: " . $variables->Obtener("Servidor") . "/Sesion");
        exit();
    }

}
