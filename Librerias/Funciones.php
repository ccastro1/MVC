<?php

require_once "Configuracion.php";

class Funciones
{
    static function Conexion()
    {
        $servidor = SERVIDOR;
        $usuario = USUARIO;
        $contrasena = CONTRASENA;
        $base = BASE;

        $conexion = new mysqli($servidor, $usuario, $contrasena, $base);

        return $conexion;
    }

    static function Vista($control, $accion, $formulario = null, $catalogos = null)
    {
        $vista = "Vistas/$control/Vista$accion.php";

        if (!is_file($vista))
            die("HTTP/1.1 404 Not Found");

        require_once "Vistas/Master.php";
    }

    static function VistaPartial($control, $accion, $formulario = null, $catalogos = null)
    {
        $vista = "Vistas/$control/$accion.php";

        if (!is_file($vista))
            die("HTTP/1.1 404 Not Found");

        require_once $vista;
    }

    static function RevisarSesion($control)
    {
        if ($control != "Sesion" && (!isset($_SESSION["Usuario"]) || $_SESSION["Usuario"] == null)) {
            header("Location: " . SITIO . "/Sesion");
            exit;
        }

        if ($control == "Sesion" && isset($_SESSION["Usuario"]) && $_SESSION["Usuario"] != null) {
            header("Location: " . SITIO);
            exit;
        }
    }

    static function Pagina($control, $accion, $total, $pagina = 1)
    {
        $sitio = SITIO;
        $registros = REGISTROS;
        $paginas = PAGINAS;

        $totalPaginas = ceil($total / $registros);
        $maximoPaginas = ($totalPaginas > $paginas) ? $paginas : $totalPaginas;
        $mitad = ceil($paginas / 2);
        $paginaTemp = ($pagina - $mitad) > 1 ? $pagina - $mitad : 1;
        $paginaInicial = $paginaTemp + ($maximoPaginas - 1) <= $totalPaginas ? $paginaTemp : $totalPaginas - ($maximoPaginas - 1);

        $paginacion = "<nav><ul id='ul-pagina'>";

        if ($pagina != 1) {
            $paginacion .= "<li>";
            $paginacion .= "<a href='/$sitio/$control/$accion/" . ($pagina - 1) . "'><</a>";
            $paginacion .= "</li>";
        }

        for ($i = $paginaInicial; $i <= $paginaInicial + ($maximoPaginas - 1); $i++) {
            $paginacion .= "<li>";
            if ($pagina == $i)
                $paginacion .= "<a href='/" . SITIO . "/$control/$accion/$i' class='activa'>$i</a>";
            else
                $paginacion .= "<a href='/" . SITIO . "/$control/$accion/$i'>$i</a>";

            $paginacion .= "</li>";
        }

        if ($pagina != $totalPaginas) {
            $paginacion .= "<li>";
            $paginacion .= "<a href='/" . SITIO . "/$control/$accion/" . ($pagina + 1) . "'>></a>";
            $paginacion .= "</li>";
        }

        $paginacion .= "</ul></nav>";

        return $paginacion;
    }

    static function Calendario($p_mes, $p_anio)
    {
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

        require_once("Calendario.php");
    }
}
