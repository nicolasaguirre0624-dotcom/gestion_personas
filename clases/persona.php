<?php

class Persona {
    public $nombre;
    public $apellido;
    public $edad;
    public $correo;
public function __construct($nombre = "", $apellido = "", $edad = 0, $correo = "") {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->correo = $correo;
    }

    public function obtenerDatos() 
        {
         return "Mi nombre es: " . $this->nombre . " " . $this->apellido . ", tengo " . $this->edad . " años y mi correo es: " . $this->correo . "<br>";
         return "Mi nombre es: " . $this->nombre . " " . $this->apellido . ", tengo " . $this->edad . " años y mi correo es: " . $this->correo . "<br>";
        }
}