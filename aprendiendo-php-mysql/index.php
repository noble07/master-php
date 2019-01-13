<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

// Comprobar si la conexión es correcta
if (mysqli_connect_errno()) {
    echo 'la conexión a la base de datos MYSQL a fallado: '.mysqli_connect_errno();
}else{
    echo 'Conexion realizada correctamente!!!<br>';
}

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");

while ($nota =  mysqli_fetch_assoc($query)) {
    echo '<h2>'.$nota['titulo'].'</h2>';
    echo $nota['descripcion'].'<br>';
}

// Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES (NULL, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);
echo '<hr>';

if ($insert) {
    echo 'Datos insertados correctamente';
}else {
    echo 'Error: '.mysqli_error($conexion);
}

?>