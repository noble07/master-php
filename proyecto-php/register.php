<?php

    if(isset($_POST)){

        //Conexión a la base de datos
        require_once 'includes/conexion.php';
        
        //Iniciar sesión
        if(!isset($_SESSION)){
            session_start();
        }

        //Recoger los valores del formulario de registro
        $nombre = !empty($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
        $apellidos = !empty($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
        $email = !empty($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
        $password =  !empty($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

        // Array de errores
        $errores = array();

        //Validar los datos antes de guardarlos en la base de datos

        //Validar campo nombre
        if (!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/', $nombre)) {
            $nombre_validate = true;
        }else{
            $nombre_validate = false;
            $errores['nombre'] = 'El nombre no es valido';
        }

        //Validar apellidos
        if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match('/[0-9]/', $apellidos)) {
            $apellidos_validate = true;
        }else{
            $apellidos_validate = false;
            $errores['apellidos'] = 'Los apellidos no son validos';
        }

        //Validar el email
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_validate = true;
        }else{
            $email_validate = false;
            $errores['email'] = 'El email no es valido';
        }

        //Validar la password
        if (!empty($password)) {
            $password_validate = true;
        }else{
            $password_validate = false;
            $errores['password'] = 'La contraseña está vacia';
        }

        $guardar_usuario = false;
        if(count($errores) == 0){
            $guardar_usuario = true;
            // Cifrar la contraseña
            $password_secure = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

            //INSERTAR USUARIO EN LA BASE DE DATOS EN LA TABLA CORRESPONDIENTE
            $sql = "INSERT INTO usuarios VALUES(NULL, '$nombre', '$apellidos', '$email','$password_secure', CURDATE());";
            $guardar = mysqli_query($db, $sql);



            if ($guardar) {
                $_SESSION['completado'] = "El registro se ha completado con éxito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
            }
        }else{
            $_SESSION['errores'] = $errores;
        }
    }
    header('Location: index.php');
?>