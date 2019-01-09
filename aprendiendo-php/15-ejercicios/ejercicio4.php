<?php

    /**
     * Ejercicio 4. Crear un script en PHP que tenga 4 variables, una de tipo array,
     * otra string, otra int, y otra bool y que imprima un mesaje segun el tipo de variable que sea
     */

    function tipoVariable($variable){
        $resultado = '';
        switch ($variable) {
            case is_array($variable):
                $resultado .= '<p>La variable: '.var_dump($variable).' es de tipo Array</p>';
                break;
            case is_string($variable):
                $resultado .= '<p>La variable: '.$variable.' es de tipo String</p>';
                break;
            case is_int($variable):
                $resultado .= '<p>La variable: '.$variable.' es de tipo Int</p>';
                break;
            case is_bool($variable):
                $resultado .= '<p>La variable: '.$variable.' es de tipo Bool</p>';
                break;                
            default:
                $resultado .= 'Error';
                break;
        }
        return $resultado;
    }

    $array = array('Dato1', 'Dato2', 1, 2);
    $int = 12;
    $string = 'Esto es un texto';
    $bool = true;

    echo tipoVariable($array);
    echo tipoVariable($int);
    echo tipoVariable($string);
    echo tipoVariable($bool);

?>