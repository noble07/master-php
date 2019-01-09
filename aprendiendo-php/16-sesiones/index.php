<?php

    /**
     * Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web
     * hasta que cierra sesón o cierra el navegador.
     */

    // Iniciar la sesión
    session_start();
    // Variable local
    $variableNormal = 'Soy una cadena de texto';

    // Varoabñe de sesión
    $_SESSION['variablePesistente'] = 'Hola soy una sesión activa';

    echo $variableNormal.'<br>';
    echo $_SESSION['variablePesistente'].'<br>';

?>