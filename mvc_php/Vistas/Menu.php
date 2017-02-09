<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta content="Candelario Castro Manjarrez" name="author">
        <meta content="Consultas de Theos" name="description">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Theos</title>
        <link rel="stylesheet" type="text/css" href="/<?= $variables->Obtener("Sitio"); ?>/Contenido/Estilos.css">
        <script type="text/javascript" src="/<?= $variables->Obtener("Sitio"); ?>/Contenido/Jquery.js"></script>
        <script type="text/javascript" src="/<?= $variables->Obtener("Sitio"); ?>/Contenido/Codigo.js"></script>
    </head>
    <body>
        <?php if (!empty($_SESSION["Usuario"])) { ?>
            <div id="cabecera">
                <div id="div_menu">
                    <img alt="Logo" style="float: left;" src="/<?= $variables->Obtener("Sitio"); ?>/Imagenes/Logo_Gob.png">
                    <ul id="menu">
                        <li><a href="/<?= $variables->Obtener("Sitio"); ?>" <?= $variables->Obtener("Activo") == "Empleado" ? "class='activo'" : ""; ?>>Empleados</a></li>
                        <li><a href="/<?= $variables->Obtener("Sitio"); ?>/Plazas" <?= $variables->Obtener("Activo") == "Plazas" ? "class='activo'" : ""; ?>>Plazas</a></li>
                        <li><a href="/<?= $variables->Obtener("Sitio"); ?>/Medallas" <?= $variables->Obtener("Activo") == "Medallas" ? "class='activo'" : ""; ?>>Medallas</a></li>
                    </ul>
                    <ul id="menu_usuario">
                        <li><a href="#" id="raiz"><?= $_SESSION["Usuario"] == "ADMIN" ? "ADMINISTRADOR" : $_SESSION["Usuario"]; ?> &#8744; </a>
                            <ul>
                                <li><a href="/<?= $variables->Obtener("Sitio"); ?>/Administrar">Administrar</a></li>
                                <li><a href="/<?= $variables->Obtener("Sitio"); ?>/Sesion/CambiarContrasena">Cambiar Contraseña</a></li>
                                <li><a href="/<?= $variables->Obtener("Sitio"); ?>/Sesion/Salir">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        <?php } ?>
        <div id="cuerpo"><?= $contenido; ?></div>
        <div id="pies"></div>
    </body>
</html>
