<?php

    /**
     * Ejercicio 3. Hacer una interfaz de usuario (form) con dos inputs y cuatro botones
     * uno para sumar, restar, dividir y multiplicar
     */
    
    $resultado = false;
    if (!empty($_POST['numero1']) && !empty($_POST['numero2'])) {
            if (!empty($_POST['sumar'])) {
                $resultado = $_POST['numero1'] + $_POST['numero2'];
            }elseif (!empty($_POST['restar'])) {
                $resultado = $_POST['numero1'] - $_POST['numero2'];
            }elseif (!empty($_POST['multiplicar'])) {
                $resultado = $_POST['numero1'] * $_POST['numero2'];
            }elseif (!empty($_POST['dividir'])) {
                $resultado = $_POST['numero1'] / $_POST['numero2'];
            } 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora con PHP</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form action="" method="POST">
        <label for="numero1">Numero 1:</label>
        <input type="number" name="numero1">
        <br>
        <label for="numero2">Numero 2:</label>
        <input type="number" name="numero2">
        <br>
        <input type="submit" value="Sumar" name="sumar">
        <input type="submit" value="Restar" name="restar">
        <input type="submit" value="Multiplicar" name="multiplicar">
        <input type="submit" value="Dividir" name="dividir">
    </form>
    <?php
        if ($resultado != false):
            echo '<h3>El resultado de la operacion es: '.$resultado.'</h3>';
        endif;
    ?>
</body>
</html>