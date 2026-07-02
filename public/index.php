<?php
require_once "../clases/persona.php";
require_once "../clases/estudiante.php";
require_once "../clases/producto.php";

$persona1 = new Persona("erick", "gonzalez", 20, "nicolasguirre0624@gmail.com");
$persona2 = new Persona("nicolas", "aguirre", 20, "nicolasaguirre@gmail.com");
$estudiante1 = new Estudiante("juan", "perez", 20, "juanperez@gmail.com");
$carro1 = new carro("Toyota", "Corolla", 2020, "Rojo");

echo $persona1->obtenerDatos();
echo $persona2->obtenerDatos();
echo $carro1->obtenerDatos();
echo $estudiante1->obtenerDatos();

