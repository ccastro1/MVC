<?php

session_name("Theos");
session_start();

require_once 'Librerias/Variables.php';
require_once 'Librerias/Configuracion.php';
require_once 'Librerias/Funciones.php';
require_once 'Librerias/Conexion.php';

$controlNombre = filter_input(INPUT_GET, "control");
$accion = filter_input(INPUT_GET, "accion");

if (empty($_SESSION["Usuario"]) && $controlNombre != "Sesion") {
    header("Location: " . $variables->Obtener("Servidor") . "/Sesion");
}

if (!empty($controlNombre)) {
    $variables->Asignar("Activo", $controlNombre);
    $controlNombre = "Control" . $controlNombre;
} else {
    $variables->Asignar("Activo", $variables->Obtener("Control"));
    $controlNombre = "Control" . $variables->Obtener("Control");
}

if (empty($accion)) {
    $accion = $variables->Obtener("Accion");
}

$rutaControl = $variables->Obtener("RutaControles") . $controlNombre . ".php";

if (is_file($rutaControl)) {
    require_once $rutaControl;
    $control = new $controlNombre;
    if (method_exists($control, $accion)) {
        $control->$accion();
    } else {
        die("Error - 404 no encontrado");
    }
} else {
    die("Error - 404 no encontrado");
}


