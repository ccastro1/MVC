<table>
    <tr>
        <th colspan="7">
            <input type="button" id="mes-anterior" value="<" class="meses">
            <label><?= $anio; ?></label>
            <label><?= $mes_espanol; ?></label>
            <input type="button" id="mes-siguiente" value=">" class="meses">
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
                echo "<td><a class='actual'>$i</a></td>";
            } else {
                echo "<td><a>$i</a></td>";
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
</table>