<?php

class ControlInicio {
    function Inicio() {
        Funciones::RevisarSesion("Inicio");

        $catalogos["Paginacion"] = Funciones::Paginacion("Inicio", "Inicio", 100);
        $catalogos["Calendario"] = Funciones::Calendario(4, 2025);

        Funciones::Vista("Inicio", "Inicio", null, $catalogos);
    }
}
