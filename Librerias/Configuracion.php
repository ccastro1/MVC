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
define("USUARIO", "dissi");
define("CONTRASENA", "pCvQm4QMx77hXzmKlEKJ3hnJaOeW4A4FSyv7D8SJaRqMeefoSH");
define("BASE", "dissi");

# Paginación
define("PAGINAS", "20");
define("REGISTROS", "10");
define("COLORBOTON", "boton-agua");
