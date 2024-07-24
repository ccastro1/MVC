<div class="contenedor-tablet">
    <div class="carta">
        <div class="carta-encabezado">
            <div class="encabezado-titulo">
                <h2>Registro de cliente</h2>
            </div>
        </div>
        <div class="carta-cuerpo">
            <form class="formulario" method="post">
                <span class="requerido">* Campos requeridos</span>
                <div class="contenedor-campos">
                    <label for="txt_usuario">Usuario <span class="requerido">*</span></label>
                    <div class="etiqueta">
                        <span><i class="fa-regular fa-user"></i></span>
                        <input type="text" id="txt_usuario" class="textos" name="usuario" required />
                        <span class="error"><i class="fa-regular fa-circle-xmark"></i></span>
                        <span class="correcto"><i class="fa-regular fa-circle-check"></i></span>
                    </div>
                </div>
                <div class="contenedor-campos">
                    <label for="txt_contrasena">Contraseña <span class="requerido">*</span></label>
                    <div class="etiqueta">
                        <span><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="txt_contrasena" class="textos" name="contrasena" required />
                        <span class="error"><i class="fa-regular fa-circle-xmark"></i></span>
                        <span class="correcto"><i class="fa-regular fa-circle-check"></i></span>
                    </div>
                </div>
                <div class="contenedor-campos">
                    <label for="txt_nombre">Nombre <span class="requerido">*</span></label>
                    <input type="text" id="txt_nombre" class="textos" name="nombre" required />
                    <span class="error"><i class="fa-regular fa-circle-xmark"></i></span>
                    <span class="correcto"><i class="fa-regular fa-circle-check"></i></span>
                </div>
                <div class="columnas-2">
                    <div class="contenedor-campos">
                        <label for="txt_paterno">Paterno <span class="requerido">*</span></label>
                        <input type="text" id="txt_paterno" class="textos" name="paterno" required />
                        <span class="error"><i class="fa-regular fa-circle-xmark"></i></span>
                        <span class="correcto"><i class="fa-regular fa-circle-check"></i></span>
                    </div>
                    <div class="contenedor-campos">
                        <label for="txt_materno">Materno <span class="requerido">*</span></label>
                        <input type="text" id="txt_materno" class="textos" name="materno" required />
                        <span class="error"><i class="fa-regular fa-circle-xmark"></i></span>
                        <span class="correcto"><i class="fa-regular fa-circle-check"></i></span>
                    </div>
                </div>
                <div class="columnas-2">
                    <div class="contenedor-campos">
                        <label for="txt_correo">Correo <span class="requerido">*</span></label>
                        <div class="etiqueta">
                            <span>@</span>
                            <input type="email" id="txt_correo" class="textos" name="correo" required />
                            <span class="error"><i class="fa-regular fa-circle-xmark"></i></span>
                            <span class="correcto"><i class="fa-regular fa-circle-check"></i></span>
                        </div>
                    </div>
                    <div class="contenedor-campos">
                        <label for="txt_telefono">Teléfono <span class="requerido">*</span></label>
                        <div class="etiqueta">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <input type="text" pattern="[0-9]{3}[0-9]{3}-[0-9]{2}-[0-9]{2}" id="txt_telefono" class="textos" name="telefono" required />
                            <span class="error"><i class="fa-regular fa-circle-xmark"></i></span>
                            <span class="correcto"><i class="fa-regular fa-circle-check"></i></span>
                        </div>
                    </div>
                </div>
                <div class="contenedor-botones">
                    <button type="button" class="boton boton-gris contorno">Cancelar</button>
                    <button type="submit" class="boton boton-azul">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="carta">
        <div class="carta-cuerpo">
            <div class="carta-acciones">
                <button type="button" id="btn-verAcciones">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
                <div class="menu-acciones" id="menu-acciones">
                    <a href="#">Nuevo Registro</a>
                    <a href="#">Opción 2</a>
                    <a href="#">Opción 3</a>
                    <a href="#">Opción 4</a>
                </div>
            </div>
            <div class="contenedor-tabla">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Paterno</th>
                            <th>Materno</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Estatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ccastro</td>
                            <td>Candelario</td>
                            <td>Castro</td>
                            <td>Manjarrez</td>
                            <td>cande131@hotmail.com</td>
                            <td>(614)229-58-54</td>
                            <td>
                                <span class="estatus activo">Activo</span>
                            </td>
                        </tr>
                        <tr>
                            <td>ccastro</td>
                            <td>Candelario</td>
                            <td>Castro</td>
                            <td>Manjarrez</td>
                            <td>cande131@hotmail.com</td>
                            <td>(614)229-58-54</td>
                            <td>
                                <span class="estatus inactivo">Inactivo</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>