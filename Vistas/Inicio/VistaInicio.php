<main class="contenedor-tablet">
    <div class="carta">
        <div class="carta-encabezado">
            <div class="encabezado-titulo">
                <h2>Registro de cliente</h2>
            </div>
        </div>
        <div class="carta-cuerpo">
            <form class="formulario" method="post">
                <div class="contenedor-campos">
                    <label for="txt_usuario">Usuario</label>
                    <div class="etiqueta">
                        <span><i class="fa-regular fa-user"></i></span>
                        <input type="text" id="txt_usuario" class="campos" name="usuario" required />
                    </div>
                </div>
                <div class="contenedor-campos">
                    <label for="txt_contrasena">Contraseña</label>
                    <div class="etiqueta">
                        <span><i class="fa-solid fa-lock"></i></span>
                        <input type="text" id="txt_contrasena" class="campos" name="contrasena" required />
                    </div>
                </div>
                <div class="contenedor-campos">
                    <label for="txt_nombre">Nombre</label>
                    <input type="text" id="txt_nombre" class="campos" name="nombre" required />
                </div>
                <div class="columnas-2">
                    <div class="contenedor-campos">
                        <label for="txt_paterno">Paterno</label>
                        <input type="text" id="txt_paterno" class="campos" name="paterno" required />
                    </div>
                    <div class="contenedor-campos">
                        <label for="txt_materno">Materno</label>
                        <input type="text" id="txt_materno" class="campos" name="materno" required />
                    </div>
                </div>
                <div class="columnas-2">
                    <div class="contenedor-campos">
                        <label for="txt_correo">Correo</label>
                        <div class="etiqueta">
                            <span>@</span>
                            <input type="email" id="txt_correo" class="campos" name="correo" required />
                        </div>
                    </div>
                    <div class="contenedor-campos">
                        <label for="txt_telefono">Teléfono</label>
                        <div class="etiqueta">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <input type="email" id="txt_telefono" class="campos" name="telefono" required />
                        </div>
                    </div>
                </div>
                <div class="contenedor-botones">
                    <button type="button" class="boton boton-gris">Cancelar</button>
                    <button type="submit" class="boton boton-azul">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</main>
<div class="contenedor">
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
                    <tr>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Paterno</th>
                        <th>Materno</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                    <tr>
                        <td>ccastro</td>
                        <td>Candelario</td>
                        <td>Castro</td>
                        <td>Manjarrez</td>
                        <td>cande131@hotmail.com</td>
                        <td>(614)229-58-54</td>
                        <td>
                            <button type="button" class="boton boton-verde circular">Editar</button>
                            <button type="button" class="boton boton-rojo circular">Borrar</button>
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
                            <button type="button" class="boton boton-gris circular">Editar</button>
                            <button type="button" class="boton boton-rojo circular">Borrar</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>