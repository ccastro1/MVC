<div id="busqueda">
    <form class="formulario" action="/<?= $variables->Obtener("Sitio") ?>/Empleado/Buscar" method="post">
        <input type="text" class="textos" name="buscar" placeholder="Buscar...">
        Año: 
        <select name="anio" class="textos">
            <option value="N">TODOS</option>
            <?php foreach ($datos["Anios"] as $anio) { ?>
                <option value="<?= $anio["Anio"]; ?>"><?= $anio["Anio"]; ?></option>
            <?php } ?>
        </select>
        Regimen: 
        <select name="regimen" class="textos">
            <option value="N">TODOS</option>
            <?php foreach ($datos["Regimen"] as $regimen) { ?>
                <option value="<?= $regimen["Regimen"]; ?>"><?= $regimen["Regimen"]; ?></option>
            <?php } ?>
        </select>
        <input type = "submit" value = "Buscar" class = "boton">
    </form>
</div>
<div id = "resultado">
    <table>
        <?php if (!empty($datos["Resultado"])) { ?>
            <?php foreach ($datos["Resultado"] as $registro) { ?>
                <tr>
                    <td><?= $registro["Empleado"]; ?></td>
                    <td><?= $registro["RFC"]; ?></td>
                    <td><?= $registro["Nombre"]; ?></td>
                    <td><?= $registro["Amaterno"]; ?></td>
                    <td><?= $registro["Apaterno"]; ?></td>
                    <td><?= $registro["Regimen"]; ?></td>
                    <td><?= $registro["Anio"]; ?></td>
                </tr>
            <?php }
        } ?>

    </table>

</div>
