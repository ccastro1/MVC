<div id="logo">
    <img alt="Logo" src="/<?= $variables->Obtener("Sitio"); ?>/Imagenes/Logo_Gob.png">
</div>
<div id="sesion">
    <br>
    <form action="/<?= $variables->Obtener("Sitio"); ?>/Sesion" method="post" class="formulario">
        <div>
            <label class="textos">Usuario:</label>
            <input type="text" name="usuario" class="textos" placeholder="Introduce Usuario" autofocus="" required="" value="<?= $datos->usuario; ?>">
        </div>
        <div>
            <label class="textos">Contraseña:</label>
            <input type="password" name="contrasena" class="textos" placeholder="Introduce Contraseña" required="">
        </div>
        <div>
            <input type="submit" value="Ingresar" class="boton">
            <?= $variables->Obtener("Mensaje"); ?>
        </div>
    </form>
</div>
