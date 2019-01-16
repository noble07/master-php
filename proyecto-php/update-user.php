<?php

    if(isset($_POST)){
        //Conexión a la base de datos
        require_once 'includes/conexion.php';
        
        //Recoger los valores del formulario de actualización
        $nombre = !empty($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
        $apellidos = !empty($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
        $email = !empty($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

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

        $guardar_usuario = false;
        if(count($errores) == 0){
            $usuario = $_SESSION['usuario'];
            $guardar_usuario = true;

            //COMPROBAR SI EL EMAIL YA EXISTE
            $sql = "SELECT id, email FROM usuarios WHERE email ='$email'";
            $isset_email = mysqli_query($db, $sql);
            $isset_user = mysqli_fetch_assoc($isset_email);

            if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
                //ACTUALIZAR USUARIO EN LA BASE DE DATOS EN LA TABLA CORRESPONDIENTE
                $usuario = $_SESSION['usuario'];
                $sql = "UPDATE usuarios SET ".
                "nombre = '$nombre', "
                ."apellidos = '$apellidos', "
                ."email = '$email' "
                ."WHERE id = ".$usuario['id'];
                $guardar = mysqli_query($db, $sql);



                if ($guardar) {
                    $_SESSION['usuario']['nombre'] = $nombre;
                    $_SESSION['usuario']['apellidos'] =  $apellidos;
                    $_SESSION['usuario']['email'] = $email;

                    $_SESSION['completado'] = "Tus datos se han actualizado con éxito";
                }else{
                    $_SESSION['errores']['general'] = "Fallo al actualizar el usuario";
                }
            }else {
                $_SESSION['errores']['general'] = "El email ya existe";
            }

        }else{
            $_SESSION['errores'] = $errores;
        }
    }
    header('Location: my-data.php');
?>