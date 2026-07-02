<?php

require_once "persona.php";

class estudiante extends persona 
{ 
    public function obtenerDatos()
    {
        return "Mi nombre es: " . $this->nombre . " " . $this->apellido . ", tengo " . $this->edad . " años y mi correo es: " . $this->correo . "<br>";
        echo "y soy un estudiante<br>";
        }
}
 