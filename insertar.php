<?php

include("conexion.php");

$rfc = "b";
$RaSo = "b";
$Dir = "b";
$Est = "b";
$Con = "b";

mysqli_query($conexion, "INSERT INTO `proveedores`(`RFC`, `RazonSocial`, `Dirección`, `Estado`, `Contacto`) VALUES ('$rfc','$RaSo','$Dir','$Est','$Con')");
mysqli_close($conexion);
?>