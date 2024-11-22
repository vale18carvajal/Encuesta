<?php

namespace Model;

class Usuario extends ActiveRecord {
    protected static $tabla = 'usuario';
    protected static $columnasDB = ['id', 'correo', 'clave', 'administrador'];

    public $id;
    public $correo;
    public $clave;
    public $administrador;
    

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->correo = $args['correo'] ?? '';
        $this->clave = $args['clave'] ?? '';
        $this->administrador = $args['administrador'] ?? 0;
    }

    public function validarLogin() : array{
        if (!$this->correo) {
            self::$alertas['error'][] = "El correo es obligatorio";
        }
        if (!filter_var($this->correo, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = "Correo no válido";
        }
        if (!$this->clave) {
            self::$alertas['error'][] = "La contraseña es obligatoria";
        }

        return self::$alertas;
    }
}