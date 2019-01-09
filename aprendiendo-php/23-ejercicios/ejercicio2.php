<?php

    /**
     * Ejercicio 2.
     * 1. Tener una función
     * 2. Validar un email con filter_var
     * 3. Recoger variable por get y validarla
     * 4. Mostrar el resultado
     */

    function validarEmail($email){
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

    if (isset($_GET['email'])) {
        if (validarEmail($_GET['email'])) {
            echo 'El email: '.$_GET['email'].' es valido';
        }else{
            echo '<h1>Coloca un email con formato valido</h1>';
        }
    }


?>

<form action="" method="GET">
    <label for="email">Email</label>
    <br>
    <input type="email" name="email">
    <br>
    <input type="submit" value="Enviar">
</form>