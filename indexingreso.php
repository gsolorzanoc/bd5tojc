<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO DE PERSONAS</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<form action="manejadoringreso.php" method="post">
<center>
	<table border="0">
		<tr>
			<td>
				Ingrese Nombre
			</td>
			<td>
				<input type="text" name="nom" required>
			</td>
		</tr>
		<tr>
			<td>
				Ingrese Apellido
			</td>
			<td>
				<input type="text" name="ape" required>
			</td>
		</tr>
		<tr>
			<td>
				Ingrese Correo
			</td>
			<td>
				<input type="email" name="cor" required>
			</td>
		</tr>
		<tr>
			<td>
				Ingrese Edad
			</td>
			<td>				
				<input type="number" name="ed" required>
			</td>
		</tr>
	</table>
	<input type="submit" name="reg" value="REGISTRAR" class="btn btn-success"> 
</center>
</form>

</body>
</html>