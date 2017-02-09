<?php

class Funcion {

    static function Vista($control, $accion, $datos = null) {
        $variables = Variables::Instancia();
        $vista = $variables->Obtener("RutaVistas") . "/$control/Vista$accion.php";
        $menu = $variables->Obtener("RutaVistas") . "Menu.php";
        if (!is_file($vista)) {
            header("Location: " . $variables->Obtener("Servidor"));
        }
        ob_start();
        require_once $vista;
        $contenido = ob_get_clean();
        require_once $menu;
    }

    static function VistaParcial($control, $accion, $datos = null) {

        $variables = Variables::Instancia();

        if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] != "XMLHttpRequest") {
            header("Location: " . $variables->Obtener("Servidor"));
        }

        $vista = $variables->Obtener("RutaVistas") . "/$control/$accion.php";

        if (!is_file($vista)) {
            header("Location: " . $variables->Obtener("Servidor"));
        }

        ob_start();
        require_once $vista;
        $contenido = ob_get_clean();

        echo $contenido;
    }

    static function Pagina($control, $accion, $total, $numero_pagina = NULL) {

        $variables = Variables::Instancia();

        $registros = $variables->Obtener("RegistroPagina");
        $paginas = $variables->Obtener("MaximoPaginas");

        $pagina = $numero_pagina;
        $inicio = ($pagina * $registros) - $registros;
        $total_paginas = ceil($total / $registros);
        $maximo_paginas = ($total_paginas > $paginas) ? $paginas : $total_paginas;
        $mitad = ($paginas / 2);
        $pagina_temp = (($pagina - $mitad) > 1) ? ceil($pagina - $mitad) : 1;
        $pagina_inicial = $pagina_temp + ($maximo_paginas - 1) <= $total_paginas ? $pagina_temp : $total_paginas - ($maximo_paginas - 1);

        $paginacion = "";

        if ($total_paginas > 1) {

            $paginacion = "<ul id='pagina'>";

            if ($pagina != 1) {
                $paginacion .= "<li>";
                $paginacion .= "<a href='/" . $variables->Obtener("Sitio") . "/$control/$accion/" . ($pagina - 1) . "'><</a>";
                $paginacion .= "</li>";
            }

            for ($i = $pagina_inicial; $i <= $pagina_inicial + ($maximo_paginas - 1); $i++) {
                $paginacion .= "<li>";
                if ($pagina == $i) {
                    $paginacion .= "<a href='/" . $variables->Obtener("Sitio") . "/$control/$accion/$i' class='pagina_activa'>$i</a>";
                } else {
                    $paginacion .= "<a href='/" . $variables->Obtener("Sitio") . "/$control/$accion/$i'>$i</a>";
                }
                $paginacion .= "</li>";
            }

            if ($pagina != $total_paginas) {
                $paginacion .= "<li>";
                $paginacion .= "<a href='/" . $variables->Obtener("Sitio") . "/$control/$accion/" . ($pagina + 1) . "'>></a>";
                $paginacion .= "</li>";
            }

            $paginacion .= "</ul>";
        }

        $resultado = ["Paginacion" => $paginacion, "Registro" => $registros, "Inicio" => $inicio];

        return $resultado;
    }

    static function Imagenes($archivo, $nombre) {

        $ffmpeg = '"C:/Program Files/ffmpeg/bin/ffmpeg.exe"';
        $video = "Archivos/Videos/$archivo";
        $image = "Archivos/Imagenes/$nombre.jpg";
        $interval = 1;
        $size = "170x170";
        $cmd = "$ffmpeg  -i $video  -deinterlace -an -ss $interval -f mjpeg -t 1 -r 1 -y -s $size $image -vstats 2>&1";
        $stas = shell_exec($cmd);

        $regex_duration = "/Duration: ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}).([0-9]{1,2})/";
        if (preg_match($regex_duration, $stas, $regs)) {
            $hours = $regs [1] ? $regs [1] : null;
            $mins = $regs [2] ? $regs [2] : null;
            $secs = $regs [3] ? $regs [3] : null;
        }

        return "$hours:$mins:$secs";
    }

    static function Calendario($p_mes, $p_anio) {

        $variables = Variables::Instancia();

        if ($p_mes > 12 || $p_mes < 1) {
            $mes = getdate()['mon'];
        } else {
            $mes = $p_mes;
        }

        if ($p_anio < getdate()["year"] - 10 || $p_anio > getdate()["year"] + 10) {
            $anio = getdate()["year"];
        } else {
            $anio = $p_anio;
        }

        $tdias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);

        $dias = [
            "Sun" => 0,
            "Mon" => 1,
            "Tue" => 2,
            "Wed" => 3,
            "Thu" => 4,
            "Fri" => 5,
            "Sat" => 6
        ];

        $mess = ($mes + 1 > 12) ? 1 : $mes + 1;
        $mesa = ($mes - 1 < 1) ? 12 : $mes - 1;
        $anioa = ($mes - 1 < 1) ? $anio - 1 : $anio;
        $anios = ($mes + 1 > 12) ? $anio + 1 : $anio;

        $meses = [
            "January" => "Enero",
            "February" => "Febrero",
            "March" => "Marzo",
            "April" => "Abril",
            "May" => "Mayo",
            "June" => "Junio",
            "July" => "Julio",
            "August" => "Agosto",
            "September" => "Septiembre",
            "October" => "Octubre",
            "November" => "Noviembre",
            "December" => "Diciembre"
        ];

        $mes_espanol = $meses[date("F", mktime(0, 0, 0, $mes, 10))];

        ob_start();
        ?>

        <table>
            <tr>
                <th colspan="7">
                    <input type="button" value="<" class="meses" onclick="calendario(<?= "'$mesa'," . "'$anioa','" . $variables->Obtener("Sitio") . "'"; ?>);">
                    <label><?php echo $anio; ?></label>
                    <label><?php echo $mes_espanol; ?></label>
                    <input type="button" value=">" class="meses" onclick="calendario(<?= "'$mess'," . "'$anios','" . $variables->Obtener("Sitio") . "'"; ?>);">
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

        <?php
        $calendario = ob_get_clean();

        return $calendario;
    }

}
