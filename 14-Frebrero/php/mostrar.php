
<?php 
include_once('conexion.php');

$sql = "SELECT * FROM user";

echo '

      
<link rel="stylesheet" href="../css/styles.css">

    <header>
    <form action="../html/insertar.html" method="get">
    <button type="submit">Insertar</button>
</form>
<form action="../index.html" method="get">
            <button type="submit">Inicio</button>
        </form>
  </header>  

<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td>
		  <td> <font face="Arial">Nombres</font> </td> 
          <td> <font face="Arial">usuario</font> </td> 
          <td> <font face="Arial">contraseña</font> </td> 
          <td> <font face="Arial">Cedula</font> </td> 
          <td> <font face="Arial">Estado</font> </td> 
		  <td> <font face="Arial">Desactivar</font> </td>
          <td> <font face="Arial">Editar</font> </td>
      </tr>';

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

        echo '<tr> 
                  <td>'.$field0name.'</td> 
				  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
				  <td>'.$desactivar='<a href="eliminar.php?id='.$row["id"].'">Desactivar</a>'.';</td>
                  <td>'.$editar='<a href="editar.php?id='.$row["id"].'">Editar</a >'.';</td>
              </tr>';
              
    }
    $result->free();
} 
?>
