<?php

class Sesion {

    public $usuario;
    public $contrasena;

    function __construct() {
        $this->usuario = filter_input(INPUT_POST, "usuario");
        $this->contrasena = filter_input(INPUT_POST, "contrasena");
    }

    function Ingresar() {
        $conexion = Conexion::Conectar();

        $stm = "select ID,Nombre,count(*) Total 
                from Usuarios where nombre = ?
                and convert(varchar,DECRYPTBYPASSPHRASE('nomina',contrasena)) = ?
                group by ID,Nombre";
        $params = [$this->usuario, $this->contrasena];
        $select = sqlsrv_prepare($conexion, $stm, $params);
        sqlsrv_execute($select);
        return sqlsrv_fetch_array($select, SQLSRV_FETCH_ASSOC);
        /*if (sqlsrv_execute($select)) {
            while ($row = sqlsrv_fetch_array($select, SQLSRV_FETCH_ASSOC)) {
                echo $row['Total'] . ", " . $row['Total'] . "<br />";
            }
        } else {
            echo "Error";
        }*/
    }

}
