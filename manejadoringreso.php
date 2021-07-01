<?php

$n = $_POST["nom"];
$a = $_POST["ape"];
$c = $_POST["cor"];
$e = $_POST["ed"];

include "encabezado.php";
include "conexion.php";

mysqli_query($con, "insert into persona(nombre, apellido, correo, edad) values('$n','$a','$c','$e')"); //variable de conexion, query de insert

echo "DATO ALMACENADO EXITOSAMENTE<br>";
echo "<a href='indexingreso.php'>REGRESAR A REGISTRAR MAS PERSONAS</a>";


?>