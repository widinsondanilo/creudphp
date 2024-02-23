<?php
include_once('conexion.php');

// Obtener los datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$cedula = $_POST['cedula'];

// Crear la consulta de actualización
$sql = "UPDATE `user` SET 
        `user_nombre`='$nombre', 
        `user_usuario`='$usuario', 
        `user_clave`='$contrasena', 
        `user_cedula`='$cedula' 
        WHERE `Id`=$id";

// Ejecutar la consulta
if ($pepito->query($sql) === TRUE) {
    echo "";
} else {
    echo " " . $pepito->error;
}

$pepito->close();
?>