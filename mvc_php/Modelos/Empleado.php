<?php

class Empleado {

    public $buscar;
    public $anio;
    public $regimen;

    function __construct() {
        $this->buscar = filter_input(INPUT_POST, "buscar") . "%";
        $this->anio = filter_input(INPUT_POST, "anio");
        $this->regimen = filter_input(INPUT_POST, "regimen");
    }

    function Anios() {
        $conexion = Conexion::Conectar();
        $stm = "select distinct Anio from Empleado_Anio order by 1";
        $select = sqlsrv_prepare($conexion, $stm);
        sqlsrv_execute($select);
        $datos = [];
        while ($row = sqlsrv_fetch_array($select, SQLSRV_FETCH_ASSOC)) {
            $datos[] = $row;
        }
        return $datos;
    }

    function Regimen() {
        $conexion = Conexion::Conectar();
        $stm = "select Descripcion_Corta Regimen from Regimen order by 1";
        $select = sqlsrv_prepare($conexion, $stm);
        sqlsrv_execute($select);
        $datos = [];
        while ($row = sqlsrv_fetch_array($select, SQLSRV_FETCH_ASSOC)) {
            $datos[] = $row;
        }
        return $datos;
    }

    function Buscar($inicio, $final) {
        $conexion = Conexion::Conectar();
        $anio = $this->anio = "N" ? 0 : $this->anio;
        $regimen = $this->regimen = "N" ? "%" : $this->regimen;
        echo $this->regimen;
        echo $regimen;
        $parametros = [$this->buscar, $this->buscar, $this->buscar, $this->buscar, $this->buscar, $anio, $anio, $regimen, $inicio, $final];
        $consulta = "select * from 
                    (select Empleado,
                            RFC,
	                    Nombre,
	                    Apaterno,
	                    Amaterno,
	                    T1.Regimen,
	                    Anio,
	                    ROW_NUMBER() over(order by RFC) Registro
                     from   Empleado_Anio T1
                     left join Cambios_RFC
                     on     RFC = Anterior_RFC
                     where  (RFC like ? 
                     or     Nuevo_RFC like ?
                     or     Nombre like ?
                     or     APaterno like ?
                     or     AMaterno like ?)
                     and    Anio = 
                     case   
                     when ? > 0 then ?
                     else   (select MAX(anio) 
                            from   Empleado_Anio 
                            where  RFC = T1.RFC 
		            and    Regimen = T1.Regimen and anio <= '9999')
                     end
                     and     T1.Regimen like ?
                     ) Resultado
                     where Registro between ? and ? ";
        $resultado = sqlsrv_prepare($conexion, $consulta, $parametros);
        sqlsrv_execute($resultado);
        $datos = [];
        while ($row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
            $datos[] = $row;
        }
        return $datos;
    }

}
