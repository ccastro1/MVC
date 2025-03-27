<?php

class ControlInicio
{
    function Inicio()
    {
        Funciones::RevisarSesion("Inicio");
        Funciones::Vista("Inicio", "Inicio");
    }
}
