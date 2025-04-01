<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link rel="stylesheet" href="<?= RUTACSS ?>/Estilos.css">
    <link rel="stylesheet" href="<?= FONTAWESOME ?>">
</head>

<body>
    <main class="<?= $control == "Sesion" ? "contenedor-sesion" : "contenedor" ?>">
        <?php if ($control != "Sesion") { ?>
            <div class="menu">
                <nav>
                    <ul>
                        <li class="sitio">
                            <h3>Portal</h3>
                        </li>
                        <li class="seccion">
                            <span>General</span>
                        </li>
                        <li class="link">
                            <a href="<?= SITIO ?>">
                                <i class="fa-solid fa-house"></i> Inicio
                            </a>
                        </li>
                        <li class="link">
                            <a href="#"><i class="fa-solid fa-calendar"></i> Menu 1</a>
                        </li>
                        <li class="link">
                            <a href="#"><i class="fa-solid fa-layer-group"></i> Menu 2</a>
                        </li>
                        <li class="link">
                            <a href="#"><i class="fa-solid fa-wrench"></i> Menu 3</a>
                        </li>
                        <li class="seccion">
                            <span>Catálogos</span>
                        </li>
                        <li class="link">
                            <a href="#"><i class="fa-solid fa-coins"></i> Menu 4</a>
                        </li>
                        <li class="link">
                            <a href="#"><i class="fa-solid fa-window-restore"></i> Menu 5</a>
                        </li>
                        <li class="link">
                            <a href="#"><i class="fa-solid fa-users-gear"></i> Menu 6</a>
                        </li>
                    </ul>
                </nav>
            </div>
        <?php } ?>

        <div class="<?= $control == "Sesion" ? "sesion" : "contenido" ?>">
            <?php if ($control != "Sesion") { ?>
                <div class="encabezado">
                    <div class="busqueda">
                        <form class="formulario" method="post">
                            <input type="text" name="buscar" class="textos" placeholder="Buscar...">
                            <button type="submit" class="boton-buscar"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="menu-usuario">
                        <span class="notificaciones">
                            <i class="fa-solid fa-bell"></i>
                            <span class="total">0</span>
                        </span>
                        <span class="nombre"><?= strtoupper($_SESSION["Nombre"]) ?></span>
                        <span id="menu-usuario"><?= strtoupper(substr($_SESSION["Nombre"], 0, 1)) ?></span>
                        <ul>
                            <li><a href="<?= SITIO ?>/Sesion/Salir">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>

            <?php require_once $vista; ?>
        </div>
    </main>

    <footer class="pie">
        <span>Pie de Página</span>
    </footer>

    <div class="bloqueo"></div>

    <div class="contenedor-modal">
        <div class="modal">
            <div class="carta">
                <div class="carta-encabezado">
                    <h2>Título Modal</h2>
                    <button type="button" class="boton-gris contorno cerrar-modal">X</button>
                </div>
                <div class="carta-cuerpo">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="carta-pie alinear-derecha">
                    <button type="button" class="boton-gris contorno cerrar-modal">Cancelar</button>
                    <button type="button" class="boton-azul">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= RUTAJS ?>/Jquery.js"></script>
    <script src="<?= RUTAJS ?>/Aplicacion.js"></script>
    <script src="<?= RUTAJS . "/$control.js" ?>"></script>
    <script type="text/javascript">
        <?= "new $control('" . SITIO . "');\n" ?>
    </script>
</body>

</html>