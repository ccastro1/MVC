<?php

$variables = Variables::Instancia();

/* Nombre del sitio */
$sitio = "Sitio";

/* Titulo del sitio */
$variables->Asignar("Titulo", $sitio);

/* Variables de servidor */
$variables->Asignar("Sitio", $sitio);
$variables->Asignar("Servidor", "http://" . $_SERVER["SERVER_NAME"] . "/" . $sitio);

/* Rutas del sitio */
$variables->Asignar("RutaControles", "Controles/");
$variables->Asignar("RutaModelos", "Modelos/");
$variables->Asignar("RutaVistas", "Vistas/");

/* Variables por defecto */
$variables->Asignar("Control", "Empleado");
$variables->Asignar("Accion", "Inicio");
$variables->Asignar("ID", 1);

/* Ruta de Archivos */
$variables->Asignar("Estilos", "/$sitio/Contenido/Estilos.css");
$variables->Asignar("JQuery", "/$sitio/Contenido/JQuery.js");
$variables->Asignar("Codigo", "/$sitio/Contenido/Codigo.js");

/* Configucarión de base de datos */
$variables->Asignar("Servidor", "ip");
$variables->Asignar("Usuario", "");
$variables->Asignar("Contrasena", "");
$variables->Asignar("BaseDatos", "");

/* COnfiguración de paginación */
$variables->Asignar("RegistroPagina", "20");
$variables->Asignar("MaximoPaginas", "10");

$variables->Asignar("Mensaje", "");
$variables->Asignar("Activo", "Inicio");
