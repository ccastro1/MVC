<div class="sesion">
    <div class="carta">
        <div class="carta-encabezado">
            <h3>Inicia Sesión</h3>
        </div>
        <form method="post">
            <div class="carta-cuerpo">
                <?php if ($formulario->error == 1) { ?>
                    <div class="campos">
                        <span class="alerta rojo"><?= $formulario->mensaje ?></span>
                    </div>
                <?php } ?>
                <div class="campos">
                    <label>Usuario</label>
                    <input type="text" name="usuario" value="<?= $formulario->usuario ?>" required autofocus class="textos">
                    <span class="invalido">Este campo es obligatorio</span>
                </div>
                <div class="campos">
                    <label>Contraseña</label>
                    <input type="password" name="contrasena" required class="textos">
                    <span class="invalido">Este campo es obligatorio</span>
                </div>
            </div>
            <div class="carta-pie alinear-derecha">
                <button type="submit" class="boton-azul">Ingresar</button>
            </div>
        </form>
    </div>
</div>