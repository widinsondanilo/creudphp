<?php

include_once('conexion.php');
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$cedula = $_POST['cedula'];

$sql = "INSERT INTO `user`(`user_nombre`, `user_usuario`, `user_clave`, `user_cedula`) VALUES ('$nombre','$usuario','$contrasena', '$cedula')";


if ($pepito->query($sql) === TRUE) {

    echo "Registro ingresado correctamente.";
} else {

    echo $pepito->error;
}

$pepito->close();