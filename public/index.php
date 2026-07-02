<?php
require_once "../clases/persona.php";

$persona1 = new Persona("erick", "gonzalez", 20, "nicolasguirre0624@gmail.com");
$persona2 = new Persona("nicolas", "aguirre", 20, "nicolasaguirre@gmail.com");

echo $persona1->obtenerDatos();
echo $persona2->obtenerDatos();

require_once "../clases/producto.php";

$carro1 = new carro("Toyota", "Corolla", 2020, "Rojo");

echo $carro1->obtenerDatos();