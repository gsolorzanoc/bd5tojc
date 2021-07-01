<?php

$i = $_POST["id"];
$n = $_POST["nom"];
$a = $_POST["ape"];
$c = $_POST["cor"];
$e = $_POST["ed"];

include "encabezado.php";
include "conexion.php";

mysqli_query($con, "update persona set nombre='$n', apellido='$a', correo='$c', edad='$e' where id='$i'");

echo "DATOS ACTUALIZADOS CORRECTAMENTE<br>";
echo "<a href='actualizar.php'>Actualizar otra persona.</a>";

?>