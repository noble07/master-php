<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación de formularios PHP</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>
    <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'faltan_valores') {
                echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
            }elseif ($error == 'nombre') {
                echo '<strong style="color:red">Introduce bien el nombre</strong>';
            }elseif ($error == 'apellidos') {
                echo '<strong style="color:red">Los apellidos no son correctos</strong>';
            }elseif ($error == 'edad') {
                echo '<strong style="color:red">Introduce una edad correcta</strong>';
            }elseif ($error == 'email') {
                echo '<strong style="color:red">El correo es erroneo</strong>';
            }elseif ($error == 'pass') {
                echo '<strong style="color:red">Introduce una contraseña de mas de 5 caracteres</strong>';
            }
        }
    ?>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre" required="required" pattern="[A-Z a-z]+">
        <br>

        <label for="apellidos">Apellidos</label>
        <br>
        <input type="text" name="apellidos" required="required" pattern="[A-Z a-z]+">
        <br>

        <label for="edad">Edad</label>
        <br>
        <input type="number" name="edad" required="required" pattern="[0-9]+">
        <br>

        <label for="email">Email</label>
        <br>
        <input type="email" name="email" required="required">
        <br>

        <label for="pass">Contraseña</label>
        <br>
        <input type="password" name="pass" required="required" minlength="5">
        <br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>