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
            <div class="encabezado">
                <div class="busqueda">
                    <form class="formulario" method="post">
                        <input type="text" name="buscar" class="textos">
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
                        <li></li>
                    </ul>
                </div>
            </div>

            <?php require_once $vista; ?>
        </div>
    </main>

    <footer class="pie">
        <span>Pie de Página</span>
    </footer>
</body>

</html>