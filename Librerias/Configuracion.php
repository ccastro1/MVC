<?php

$sitio = "http://{$_SERVER["SERVER_NAME"]}/MVC";

# Generales
define("SITIO", $sitio);
define("CONTROL", "Inicio");
define("ACCION", "Inicio");

# Rutas
define("RUTACSS", "$sitio/Html/Css");
define("FONTAWESOME", "$sitio/Html/FontAwesome/css/all.min.css");
define("RUTAJS", "$sitio/Html/Js");

# Base de Datos
define("SERVIDOR", "localhost");
define("USUARIO", "portal");
define("CONTRASENA", "DulA44Pb1XYn7iewkBlesjLmxENr3SoB");
define("BASE", "portal");

# Paginación
define("PAGINAS", "20");
define("REGISTROS", "10");
