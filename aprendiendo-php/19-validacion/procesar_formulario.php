<?php

    $error = 'faltan_valores';
    if (!empty($_POST['nombre']) && !empty($_POST['edad']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
        $error = 'ok';

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = (int) $_POST['edad'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        // Validar el nombre
        if (!is_string($nombre) || preg_match('/[0-9]/', $nombre)) {
            $error = 'nombre';
        }elseif (!is_string($apellidos) || preg_match('/[0-9]/', $apellidos)) {
            $error = 'apellidos';
        }elseif (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
            $error = 'edad';
        }elseif (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'email';
        }elseif (empty($pass) || strlen($pass)<5) {
            $error = 'pass';
        }

    }else{
        $error = 'faltan_valores';
    }

    if ($error != 'ok') {
        header('Location:index.php?error='.$error);
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación de formularios PHP</title>
</head>
<body>
    <?php if($error == 'ok'):?>
    <h1>Datos validados correctamente</h1>
        <p><?= $nombre ?></p>
        <p><?= $apellidos ?></p>
        <p><?= $edad ?></p>
        <p><?= $email ?></p>
    <?php endif; ?>

</body>
</html>