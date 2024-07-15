<div id="div_list">
    <?php while ($registro = $variables->fetch_assoc()) { ?>
        <?= $registro["id"] ?>
        <?= $registro["name"] ?>
    <?php } ?>
    <button type="button" id="btn">Cargar</button>
</div>