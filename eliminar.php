<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR UNA PERSONA</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<form action="manejadoreliminar.php" method="post">
	<center>
		<table border="0">
			<tr>
				<td>
					Ingrese el Id de la persona
				</td>
				<td>
					<input type="number" name="id" required>
				</td>
			</tr>
		</table>
		<input type="submit" name="eliminar" value="ELIMINAR" class="btn btn-danger">
	</center>
</form>
</body>
</html>