<!DOCTYPE html>
<html>
<head>
	<title>ACTUALIZAR DATOS</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<form action="manejadoractualizar.php" method="post">
	<center>
		<table border="0">
			<tr>
				<td>
					Ingrese el id de la persona: 
				</td>
				<td>
					<input type="number" name="id" required>
				</td>
			</tr>
			<tr>
				<td>
					Ingrese el nuevo nombre:
				</td>
				<td>
					<input type="text" name="nom" required>
				</td>
			</tr>
			<tr>
				<td>
					Ingrese el nuevo apellido:
				</td>
				<td>
					<input type="text" name="ape" required>
				</td>
			</tr>
			<tr>
				<td>
					Ingrese el nuevo correo:
				</td>
				<td>
					<input type="email" name="cor" required>
				</td>
			</tr>
			<tr>
				<td>
					Ingrese la nueva edad:
				</td>
				<td>
					<input type="number" name="ed" required>
				</td>
			</tr>
		</table>
		<input type="submit" name="actualiza" value="ACTUALIZAR" class="btn btn-warning">
	</center>
</form>

</body>
</html>