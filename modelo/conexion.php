<?php
$host = "localhost";        // Host del servidor
$usuario = "root";    // Nombre de usuario de MySQL
$contraseña = ""; // Contraseña de MySQL
$bd = "test";  // Nombre de la base de datos

// Crear una conexión
$conexion = new mysqli($host, $usuario, $contraseña, $bd);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
} else {
    echo "";
}

// Aquí puedes realizar tus consultas SQL usando $conexion
?>