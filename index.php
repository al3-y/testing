<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud</title>
    <!--- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---BOOSTRAP --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-3"> </h1>

    <div class="container-fluid row">

        <form class="col-4" method="POST">

            <h3 class="text-center text-secondary">Registro de equipos</h3>

            <?php
            include "modelo/conexion.php";
            include "controlador/registro.php";
            ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Equipo</label>
                <input type="text" class="form-control" name="equipo">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">

            <table class="table">

                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Equipo</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query(" SELECT * FROM USUARIOS");
                    while ($datos = $sql->fetch_object()) { ?>

                        <tr>
                            <td><?= $datos->usuarioID ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->equipo ?></td>
                            <td>
                                <a href="edit.php?id=<?= $datos->usuarioID ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>



                    <?php }
                    ?>

                </tbody>

            </table>

        </div>

    </div>

    <!---BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>