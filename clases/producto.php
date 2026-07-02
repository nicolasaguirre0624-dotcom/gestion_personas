<?php

class carro {
    public $marca;
    public $modelo;
    public $año;
    public $color;

    public function __construct($marca = "", $modelo = "", $año = 0, $color = "") {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
        $this->color = $color;
    }

    public function obtenerDatos() {
        return "El carro es un " . $this->marca . " " . $this->modelo . ", del año " . $this->año . " y de color " . $this->color . "<br>";
    }
}