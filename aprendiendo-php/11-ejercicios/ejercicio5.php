<?php

    /**
    * Ejercicio 5. Mostrar todos los numeros entro 2 numeros que llegan por metodo GET
    */

    if (isset($_GET['numero1'], $_GET['numero2'])) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        if ($numero1 < $numero2) {
            for ($i=$numero1; $i <= $numero2 ; $i++) { 
                echo '<p>'.$i.'</p>';
            }
        }elseif ($numero2 < $numero1){
            for ($i=$numero2; $i <= $numero1 ; $i++) { 
                echo '<p>'.$i.'</p>';
            }
        }else{
            echo $numero1;
        }
        
    } else {
        echo 'Ingrese dos numeros por metodo GET';
    }

?>