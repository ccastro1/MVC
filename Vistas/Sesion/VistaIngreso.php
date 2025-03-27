<div class="sesion">
    <div class="carta">
        <div class="carta-encabezado">
            <h3>Inicia Sesión</h3>
        </div>
        <form method="post">
            <div class="carta-cuerpo">
                <div class="campos">
                    <label>Usuario</label>
                    <input type="text" name="usuario" value="<?= $formulario->usuario ?>" required autofocus class="textos">
                    <span class="invalido">Este campo es obligatorio</span>
                </div>
                <div class="campos">
                    <label>Contraseña</label>
                    <input type="password" name="contrasena" required class="textos">
                    <span class="invalido">Este campo es obligatorio</span>
                    <i class="fa-solid fa-circle-check"></i>                    
                </div>
            </div>
            <div class="carta-pie alinear-derecha">
                <button type="submit" class="boton-azul">Ingresar</button>
                <?php if ($formulario->error == 1) { ?>
                    <span class="error"><?= $formulario->mensaje ?></span>
                <?php } ?>
            </div>
        </form>
    </div>
</div>