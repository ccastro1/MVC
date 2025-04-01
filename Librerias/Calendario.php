<table class="tabla calendario">
    <thead>
        <tr>
            <th colspan="7">
                <button type="button" id="mes-anterior" class="meses boton-azul">
                    <i class="fa-solid fa-angle-left"></i>
                </button>
                <span><?= $mes_espanol; ?></span>
                <span><?= $anio; ?></span>
                <button type="button" id="mes-siguiente" class="meses boton-azul">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            </th>
        </tr>
        <tr>
            <th>Domingo</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $fecha = date("Ymd");
            $primero = date("D", mktime(0, 0, 0, $mes, 1, $anio));
            $numero = $dias[$primero];

            for ($j = 0; $j < $numero; $j++) {
                echo "<td></td>";
            }

            for ($i = 1; $i <= $tdias; $i++) {
                $primero = date("D", mktime(0, 0, 0, $mes, $i, $anio));
                $numero = $dias[$primero];
                $fecha2 = date("Ymd", mktime(0, 0, 0, $mes, $i, $anio));

                if ($fecha == $fecha2) {
                    echo "<td class='actual'><span>$i</span></td>";
                } else {
                    echo "<td><span>$i</span></td>";
                }

                if ($numero == 6 && $numero < $dias) {
                    echo "</tr><tr>";
                }
            }

            for ($j = 6; $j > $numero; $j--) {
                echo "<td></td>";
            }
            ?>
        </tr>
    </tbody>
</table>