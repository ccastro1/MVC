<?php

session_name("Sitio");
session_start();

require_once 'Librerias/Variables.php';
require_once 'Librerias/Configuracion.php';
require_once 'Librerias/Funciones.php';
require_once 'Librerias/Conexion.php';

$controlNombre = filter_input(INPUT_GET, "control");
$accion = filter_input(INPUT_GET, "accion");

if (empty($_SESSION["Usuario"]) && $controlNombre != "Sesion") {
    header("Location: " . $variables->Obtener("Servidor") . "/Sesion");
    exit();
}

if (!empty($controlNombre)) {
    $variables->Asignar("Titulo", $titulo);
    $controlNombre = "Control" . $controlNombre;
} else {
    $variables->Asignar("Titulo", $variables->Obtener("Control"));
    $controlNombre = "Control" . $variables->Obtener("Control");
}

if (empty($accionNombre)) {
    $accionNombre = $variables->Obtener("Accion");
}

$rutaControl = $variables->Obtener("rutaControles") . $controlNombre . ".php";

if (is_file($rutaControl)) {
    require_once $rutaControl;
} else {
    header("Location: " . $variables->Obtener("Servidor") . "/Error");
    exit();
}

$control = new $controlNombre();

if (method_exists($control, $accionNombre)) {
    $control->$accionNombre();
} else {
    header("Location: " . $variables->Obtener("Servidor") . "/Error");
    exit();
}







