<?php

class Variables {

    private $variables;
    private static $instancia;

    function __construct() {
        $this->variables = [];
    }

    function Asignar($nombre, $valor) {
        $this->variables[$nombre] = $valor;
    }

    function Obtener($nombre) {
        return $this->variables[$nombre];
    }

    public static function Instancia() {
        if (!isset(self::$instancia)) {
            $clase = __CLASS__;
            self::$instancia = new $clase;
        }

        return self::$instancia;
    }

}
