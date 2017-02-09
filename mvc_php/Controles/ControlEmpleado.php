<?php

require_once $variables->Obtener("RutaModelos") . 'Empleado.php';

class ControlEmpleado {

    function Inicio() {
        $funcion = new Empleado();
        $datos["Anios"] = $funcion->Anios();
        $datos["Regimen"] = $funcion->Regimen();
        $datos["Resultado"] = "";
        return Funcion::Vista("Empleado", "Inicio", $datos);
    }

    function Buscar() {
        $funcion = new Empleado();
        $datos["Anios"] = $funcion->Anios();
        $datos["Regimen"] = $funcion->Regimen();
        $datos["Resultado"] = $funcion->Buscar(1, 100);
        return Funcion::Vista("Empleado", "Inicio", $datos);
    }

}
