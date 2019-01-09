<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir imagenes PHP</title>
</head>
<body>
    <h1>Subir archivos con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <h2>Listado de imagenes</h2>
    <?php
        $gestor = opendir('./images');
        if ($gestor):
            while (($image = readdir($gestor)) !== false):
                if ($image != '.' && $image != '..'):
                    echo "<img src='images/$image' width = '200px'><br>";
                endif;
            endwhile;
        endif;
    ?>
</body>
</html>