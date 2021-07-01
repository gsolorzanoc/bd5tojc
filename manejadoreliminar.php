<?php

$i = $_POST["id"];

include "encabezado.php";
include "conexion.php";

mysqli_query($con, "delete from persona where id='$i'");

echo "DATO ELIMINADO<br>";
echo "<a href='eliminar.php'>desea eliminar otro dato</a>";

?>