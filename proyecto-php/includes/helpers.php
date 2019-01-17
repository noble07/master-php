<?php

    function mostrarError($errores, $campo){
        $alerta = '';
        if (isset($errores[$campo]) && !empty($campo)) {
            $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
        }
        return $alerta;
    }

    function borrarErrores(){
        $borrado = false;
        if(isset($_SESSION['errores'])){
            unset($_SESSION['errores']);
            $borrado = true;
        }
        if (isset($_SESSION['completado'])) {
            unset($_SESSION['completado']);
            $borrado = true;
        }
        if (isset($_SESSION['error_login'])) {
            unset($_SESSION['error_login']);
            $borrado = true;
        }
        if (isset($_SESSION['errores_entrada'])) {
            unset($_SESSION['errores_entrada']);
            $borrado = true;
        }
        if (isset($_SESSION['errores_categoria'])) {
            unset($_SESSION['errores_categoria']);
            $borrado = true;
        }
        
        return $borrado;
    }

    function conseguirCategorias($conexion) {
        $sql = "SELECT * FROM categorias ORDER BY id ASC;";
        $categorias = mysqli_query($conexion, $sql);
        $result = array();

        if ($categorias && mysqli_num_rows($categorias) >= 1) {
            $result = $categorias;
        }

        return $result;
    }

    function conseguirCategoria($conexion, $id) {
        $sql = "SELECT * FROM categorias WHERE id = $id;";
        $categorias = mysqli_query($conexion, $sql);
        $result = array();

        if ($categorias && mysqli_num_rows($categorias) >= 1) {
            $result = mysqli_fetch_assoc($categorias);
        }

        return $result;
    }

    function conseguirEntradas($conexion, $limit=null, $categoria = null){
        $sql ="SELECT e.*, c.nombre AS 'categoria' FROM entradas e "
        ."INNER JOIN categorias c ON e.categoria_id = c.id ";
        if(!empty($categoria)){
            $sql .= "WHERE e.categoria_id = $categoria ";
        }
        $sql.= "ORDER BY e.id DESC ";

        if (!is_null($limit)) {
            //$sql = $sql."LIMIT 4";
            $sql .= "LIMIT 4";
        }

        $entradas = mysqli_query($conexion, $sql);
        $result = array();
        if ($entradas && mysqli_num_rows($entradas) >= 1) {
            $result = $entradas;
        }
        return $entradas;
    }
?>