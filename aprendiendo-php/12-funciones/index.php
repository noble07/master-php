<?php

    /**
     * FUNCIONES:
     * Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto
     * y que pueden reutilizarse solamente invocando a la función tantas veces como
     * queramos
     * 
     * function nombreDeMiFuncion($parametros){
     *      #Codigo
     * }
     * 
     * nombreDeMiFuncion($parametros); Asi se llama la funcion
     */
    
    //Ejemplo

    function muestraNombres(){
        echo 'Juan Camilo <br>';
        echo 'Luisa <br>';
        echo 'Juan Fernando <br>';
        echo 'Camilo <br>';
    }
    
    //Invocar función
    //muestraNombres();

    // Ejemplo 2

    function tabla($numero){
        echo '<h3>Tabla de multiplicar del numero: '.$numero.'</h3>';
        for ($i=1; $i <= 10; $i++) { 
            echo $numero.' x '.$i.' = '.($numero*$i).'<br>';
        }
    }
    /*if (isset($_GET['numero'])) {
        tabla($_GET['numero']);
    }else{
        echo 'Ingrese un numero por la URL ($_GET)';
    }*/
    
    // Ejemplo 3

    function calculadora($numero1, $numero2, $negrilla = false){

        // Conjunto de instricciones a ejecutar

        $cadeTexto = '';
        if ($negrilla) {
            $cadeTexto .= '<h1>';
        }
        $cadeTexto .= 'Suma: '.($numero1+$numero2).'<br>';
        $cadeTexto .= 'Resta: '.($numero1-$numero2).'<br>';
        $cadeTexto .= 'Multiplicación: '.($numero1*$numero2).'<br>';
        $cadeTexto .= 'División: '.($numero1/$numero2).'<br>';
        if ($negrilla) {
            $cadeTexto .= '</h1>';
        }
        $cadeTexto .= '<hr>';

        return $cadeTexto;
    }

    echo calculadora(10, 20, true);
    
    // Ejemplo 4

    function getNombre($nombre){
        $texto = 'El nombre es: '.$nombre;
        return $texto;
    }

    function getApellidos($apellidos){
        $texto = 'los apellidos son: '.$apellidos;
        return $texto;
    }


    function devulveElNombre($nombre, $apellidos){
        $texto = getNombre($nombre).'<br>'.getApellidos($apellidos);
       return $texto;
    }

    echo devulveElNombre('Juan Camilo', 'Muñoz Zuleta');
?>