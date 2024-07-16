<?php

class Funciones
{
    static function Vista($control, $accion, $variables = [])
    {
        $rutaVista = "Vistas/{$control}/Vista{$accion}.php";
        if (!file_exists($rutaVista)) die("Error 404. View not found");
        include("Vistas/Master.php");
    }

    static function VistaParcial($control, $accion, $variables = [])
    {
        if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] != "XMLHttpRequest") die("Error. Bad request");

        $rutaVista = "Vistas/{$control}/{$accion}.php";
        if (!file_exists($rutaVista)) die("Error 404. View not found");

        include($rutaVista);
    }

    static function Conexion()
    {
        $variables = Instancia::Iniciar();

        $servidor = $variables->Obtener("Servidor");
        $base = $variables->Obtener("Base");
        $usuario = $variables->Obtener("Usuario");
        $contrasenia = $variables->Obtener("Contrasenia");

        return new mysqli($servidor, $usuario, $contrasenia, $base);
    }

    static function Pagina($control, $accion, $total, $numeroPagina = null)
    {

        $variables = Instancia::Iniciar();

        $registros = $variables->Obtener("RegistroPagina");
        $paginas = $variables->Obtener("MaximoPaginas");

        $pagina = $numeroPagina;
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

    static function Calendario($p_mes, $p_anio)
    {

        $variables = Instancia::Iniciar();

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
        include("Calendario.php");
    }
}
