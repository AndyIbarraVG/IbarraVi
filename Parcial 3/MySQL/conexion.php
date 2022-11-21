<?php

$servidor = "localhost";
$basedatos = "datos";
$usuario = "AndyIbarra";
$password = "A.1iomT*vgE_";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar al localhost");
$consulta = "select * from registro";

$registros = mysqli_query($con,$consulta) or die("Problema con el select");

$result = mysqli_fetch_all($registros);

mysqli_close($con);
echo json_encode($result);
?>