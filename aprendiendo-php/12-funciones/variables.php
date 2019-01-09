<?php

    /**
     * Variables locales: Son las que se definene dentro de una función y no pueden ser usadas 
     * fuera de la función, solo estan disponibles dentro. A no ser de que se haga un return.
     * 
     * Variables globales: Son las que se declaran fuera de una función y estan disponibles 
     * dentro y fuera de las funciónes
     */

    // Variable global
    $frase = 'Ni los genios son tan genios, ni los mediovre tan mediocres';

    echo $frase;

    function holaMundo(){
        global $frase;
        echo '<h1>'.$frase.'</h1>';

        $year = 2019;
        echo '<h1>'.$year.'</h1>';
        return $year;
    }

    echo holaMundo();

    echo '<hr>';
    //Funciones variables

    function buenasDias(){
        return '<h1>Hola! Buenos días :)</h1>';
    }

    function buenasTardes(){
        return '<h1>Hey!! Que tal ha ido la comida??</h1>';
    }

    function buenasNoches(){
        return '<h1>¿Te vas a domir ya? Buenas noches!!!</h1>';
    }

    $horario = 'Noches';
    $miFuncion = 'buenas'.$horario;
    echo $miFuncion();
?>