<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
    <form action="../html/insertar.html" method="get">
    <button type="submit">Insertar</button>
</form>
    <form action="mostrar.php" method="get">
        <button type="submit">mostrar</button>
    </form>
    <form action="../index.html" method="get">
            <button type="submit">Inicio</button>
        </form>
    </header>
<?php
include_once('conexion.php');
$user_id=$_GET["id"];
$sql = "SELECT * FROM `user` WHERE `Id`=$user_id";
if ($result = $pepito->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $field0name = $row["id"];
        $field1name = $row["user_nombre"];
        $field2name = $row["user_usuario"];
        $field3name = $row["user_clave"];
        $field4name = $row["user_cedula"];
        $field5name = $row["user_estado"];
        if($field5name==1) $field5name="activo";
            else $field5name="inactivo";
    }
}
?>
<p><form action="actualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $field0name; ?>">
    <input type="text" name="nombre" value="<?php echo $field1name; ?>">
    <input type="text" name="usuario" value="<?php echo $field2name; ?>">
    <input type="text" name="contrasena" value="<?php echo $field3name; ?>">
    <input type="text" name="cedula" value="<?php echo $field4name; ?>">
    <input type="submit" value="Actualizar">
</form></p>

</body>
</html>