<?php

if (!empty($_POST["btnregistrar"])) {

    if (!empty($_POST["nombre"]) and !empty($_POST["equipo"])) {

        $nombre = $_POST["nombre"];
        $equipo = $_POST["equipo"];

        $sql = $conexion->query(" INSERT INTO usuarios(nombre,equipo) VALUES('$nombre','$equipo')");

        if ($sql == 1) {
            echo '<div class="alert alert-success" role="alert">Registrado</div>';
        }else {
            echo '<div class="alert alert-danger" role="alert">404</div>';
        }


    } else {
        echo " not null";
    }
}
