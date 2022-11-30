<?php

include("conexion.php");

$rfc = "a";
$RaSo = "b";
$Dir = "b";
$Est = "b";
$Con = "b";
$new_rfc = "c";
mysqli_query($conexion, "UPDATE proveedor SET RFC = '$new_rfc' WHERE RFC = '$rfc'");
mysqli_close($conexion);
?>