<?php

class Instancia
{
    public $variables;
    public static $instancia;

    function __construct()
    {
        $this->variables = [];
    }

    public function Asignar($nombre, $valor)
    {
        return $this->variables[$nombre] = $valor;
    }

    public function Obtener($nombre)
    {
        return $this->variables[$nombre];
    }

    static function Iniciar()
    {
        if (!isset(self::$instancia)) {
            $clase = __CLASS__;
            self::$instancia = new $clase;
        }

        return self::$instancia;
    }
}
