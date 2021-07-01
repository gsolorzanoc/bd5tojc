<!DOCTYPE html>
<html>
<head>
	<title>MOSTRAR PERSONAS</title>
</head>
<body>
<center>
<table border="1">
<tr>
	<td>Id de la persona</td>
	<td>Nombre de la persona</td>
	<td>Apellido de la persona</td>
	<td>Correo de la persona</td>
	<td>Edad de la persona</td>
</tr>

<?php
	include "encabezado.php";
	include "conexion.php";	

	$recibir = mysqli_query($con, "select * from persona"); //guardo la consulta en una variable

	while($rec = mysqli_fetch_array($recibir)){ //recorro la tabla registro a registro, almacenando todo en $rec

	echo "<tr>";
	echo "<td>".$rec["id"]."</td>"; //muestra el id de la persona
	echo "<td>".$rec["nombre"]."</td>";
	echo "<td>".$rec["apellido"]."</td>";
	echo "<td>".$rec["correo"]."</td>";
	echo "<td>".$rec["edad"]."</td>";
	echo "</tr>";

	}		
?>

</table>
</center>
</body>
</html>