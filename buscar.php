<!DOCTYPE html>
<html>
<head>
	<title>buscador de personas</title>
</head>
<body>

<?php
	include "encabezado.php";
?>
<center>
	<form action="manejadorbuscar.php" method="post">
		<table>
			<tr>
				<td>Ingrese el Id a buscar</td>
				<td><input type="number" name="id" required></td>
			</tr>
		</table>
		<input type="submit" name="buscar" value="BUSCAR" class="btn btn-warning">
	</form>
</center>

</body>
</html>