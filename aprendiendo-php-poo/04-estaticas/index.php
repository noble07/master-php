<?php

require_once 'configuracion.php';

Configuracion::setColor('blue');
Configuracion::setEntorno('localhost');
Configuracion::setNewsletter(true);

echo Configuracion::$color.'<br>';
echo Configuracion::$entorno.'<br>';
echo Configuracion::$newsletter.'<br>';

$configuracion = new Configuracion();
$configuracion::$color = "rojo";
echo $configuracion::$color;
var_dump($configuracion);

/* class ParentClass {
    function test() {
        self::who();    // will output 'parent'
        $this->who();    // will output 'child'
    }

    function who() {
        echo 'parent';
    }
}

class ChildClass extends ParentClass {
    function who() {
        echo 'child';
    }
}

$obj = new ChildClass();
$obj->test(); */