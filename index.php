<?php

require_once "./Librerias/Instancia.php";
require_once "./Librerias/Configuracion.php";
require_once "./Librerias/Funciones.php";

//$control = filter_input(INPUT_GET, "control");
//$accion = filter_input(INPUT_GET, "accion");

$ruta = explode("/", $_SERVER["REQUEST_URI"]);

$control = $ruta[1];
$control = (!empty($control)) ? "Control$control" : "ControlInicio";
$accion = (count($ruta) > 2) ? $ruta[2] : "Inicio";

$rutaControl = "Controles/$control.php";

if (!file_exists($rutaControl))
    die("Error 404. Controller not found");

require_once $rutaControl;
$funcion = new $control;

if (!method_exists($funcion, $accion)) {
    die("Error 404. Action not found");
}

$funcion->$accion();
