<?php
include "modelo/conexion.php";

$id = $_GET["id"];

$sql = $conexion->query("SELECT * FROM usuarios WHERE usuarioID='$id'");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!---BOOSTRAP --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form class="col-4 p-3 m-auto" method="POST">

        <div class="alert alert-secondary text-center" role="alert">Editar registro</div>

        <?php

        include "controlador/editar.php";

        while ($datos = $sql->fetch_object()) { ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nuevo_nombre">
                <div class="form-text">Nombre anterior: <?= $datos->nombre ?></div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Equipo</label>
                <input type="text" class="form-control" name="nuevo_equipo">
                <div class="form-text">Equipo anterior: <?= $datos->equipo ?></div>
            </div>

        <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="btneditar" value="ok">Editar</button>
    </form>

    <!---BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>