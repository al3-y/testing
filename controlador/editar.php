<?php

$id = $_GET["id"];

if (!empty($_POST["btneditar"])) {

    if (!empty($_POST["nuevo_nombre"]) and !empty($_POST["nuevo_equipo"])) {

        $nuevo_nombre = $_POST["nuevo_nombre"];
        $nuevo_equipo = $_POST["nuevo_equipo"];

        $sql = $conexion->query(" UPDATE usuarios SET nombre = '$nuevo_nombre', equipo = '$nuevo_equipo' WHERE usuarioID='$id' ");

        if ($sql == 1) {
            header("location:index.php");
            //echo '<div class="alert alert-success" role="alert">Editado</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">404</div>';
        }
    } else {
        echo "error";
    }
}
