<?php

/*
TIPOS DE DATOS:
Entero (int / integer) = 99
Coma flotante / decimales (float / double) = 3.45
Cadenas (string) = 'Hola yo soy un string'
Boleano (bool) = true false
null
Coleccion de datos (Array)
Objetos
*/

$numero = 100;
$decimal = 27.9;
$text = 'Soy un texto';
$verdadero = true;
$nula = null;

echo gettype($numero);
echo '<br>';
echo gettype($decimal);
echo '<br>';
echo gettype($text);
echo '<br>';

// Debugear

$miNombre = 'Juan Camilo Muñoz';
var_dump($miNombre);
?>