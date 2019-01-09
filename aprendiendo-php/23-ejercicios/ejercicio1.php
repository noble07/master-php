<?php

    /**
     * Ejercicio 1. Crear una sesión que aumente su valor en uno o disminuya en uno en funcion
     * de si el parametro get counter esta a uno o a cero
     */

    session_start();

    if (!isset($_SESSION['numero'])) {
        $_SESSION['numero'] = 0;
    }

    if (isset($_GET['counter'])) {
        if ($_GET['counter'] == 1) {
            $_SESSION['numero']++;
        }elseif ($_GET['counter'] == 0){
            $_SESSION['numero']--;
        }
        
    }

?>
<h1>El valor de la sesion es: <?= $_SESSION['numero'] ?></h1>
<a href="ejercicio1.php?counter=1">Aumentar</a>
<a href="ejercicio1.php?counter=0">Disminuir</a>