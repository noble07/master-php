<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imprimir por pantalla - Master en PHP</title>
</head>
<body>
    <h1>Master en PHP</h1>
    <?= 'Atajo de impresion'?>
    <?php
        echo '<h3>Listado de videojuegos</h3>';
        echo '<ul>'
             .'<li>GTA</li>'
             .'<li>LoL</li>'
             .'<li>R6</li>'
             .'</ul>';
        echo '<p>Esta es toda'.' - '.'lista de juegos</p>';
    ?>
</body>
</html>
