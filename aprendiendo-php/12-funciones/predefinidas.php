<?php

    // Debugger y ver el resultado de una variable
    $nombre = 'Juan Camilo Muñoz Zuleta';
    var_dump($nombre);

    // Fechas
    echo date('d-m-Y');
    echo '<br>';
    echo time();
    echo '<br>';

    // Matematicas
    echo 'Raiz cuadrada de 10: '.sqrt(10);
    echo '<br>';

    echo 'Número aleatorio entre 10 y 40: '.rand(10,40);
    echo '<br>';

    echo 'Número PI '.pi();
    echo '<br>';

    echo 'Redondear 7.891234: '.round(7.891234);
    echo '<br>';

    // Más funciónes generales

    echo gettype($nombre);
    echo '<br>';

    // Detectar tipos de variables
    if (is_string($nombre)) {
        echo 'Esa variable es un string';
        echo '<br>';
    }

    if (is_float($nombre)) {
        echo 'La variable es de tipo flotante';
        echo '<br>';
    }else{
        echo 'La variable no es de tipo flotante';
        echo '<br>';
    }

    // Comprobar si existe una viriable
    if (isset($edad)) {
        echo 'La variable exite';
        echo '<br>';
    }else{
        echo 'La variable no existe';
        echo '<br>';
    }

    // Limpiar espacios
    $frase = '   Mi contenido     ';
    var_dump(trim($frase));
    echo $frase;
    echo '<br>';

    // Eliminar variables / indicies de arrays
    $year = 2020;
    unset($year);
    
    // Comprobar variable vacia
    $texto = 'true';
    if (empty($texto)) {
        echo 'La variable texto esta vacia';
        echo '<br>';
    }else{
        echo 'La variable tiene contenido';
        echo '<br>';
    }

    // Contar caracteres de un string (cadena)
    $cadena = '1234567';
    echo strlen($cadena);
    echo '<br>';

    // Encontrar caracter
    $frase = 'La vida es bella';
    echo strpos($frase, 'vida');
    echo '<br>';

    // Reemplazar palabras de un string
    $frase = str_replace('vida', 'moto', $frase);
    echo $frase;
    echo '<br>';

    // MAYUSCULAS y minisculas
    echo strtolower($frase);
    echo '<br>';
    echo strtoupper($frase);
    echo '<br>';
?>