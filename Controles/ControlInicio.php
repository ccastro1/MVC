<?php
require_once "./Modelos/Inicio.php";

class ControlInicio
{
    function Inicio()
    {
        $funcion = new Inicio();
        $datos = $funcion->Lista();

        Funciones::Vista("Inicio", "Inicio", $datos);
    }

    function Lista()
    {
        //$function = new Inicio();

        Funciones::VistaParcial("Inicio", "Lista");
    }
}
