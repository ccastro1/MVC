<?php
session_name("Portal");
session_start();

require_once "Librerias/Funciones.php";

$control = filter_input(INPUT_GET, "control");
$accion = filter_input(INPUT_GET, "accion");

if (strlen($control) <= 0)
    $control = CONTROL;

if (strlen($accion) <= 0)
    $accion = ACCION;

$controlador = "Control$control";
$rutaControl = "Controles/$controlador.php";

if (!is_file($rutaControl))
    die("HTTP/1.1 404 Not Found");

require_once $rutaControl;

if (!class_exists($controlador))
    die("HTTP/1.1 404 Not Found");

if (!method_exists($controlador, $accion))
    die("HTTP/1.1 404 Not Found");

$aplicacion = new $controlador();
$aplicacion->$accion();
