<?php

include_once('conexion.php');
//actualizar registros
$user_id=$_GET["id"];

$sql = "UPDATE `user` SET `user_estado`=0 WHERE `Id`=$user_id";

if ($pepito->query($sql) === TRUE) {
    echo "Registro actualizado correctamente";
    $valor = 1;
} else {
    echo $pepito->error;
    $valor = 0;
}

$pepito->close();

echo "El valor es: " . $valor;
