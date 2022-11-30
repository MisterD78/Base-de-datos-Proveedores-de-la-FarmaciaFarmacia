<?php

include("conexion.php");

$rfc = "c";
$RaSo = "b";
$Dir = "b";
$Est = "b";
$Con = "b";
$new_rfc = "c";
mysqli_query($conexion, "DELETE FROM proveedor WHERE RFC = '$rfc'");
mysqli_close($conexion);
?>