<?php
$nombre = $_POST['Nombre'];
$apellidoP = $_POST['Apellido_Paterno'];
$apellidoM = $_POST['Apellido_Materno'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];
$servidor = "localhost";
$usuario = "AndyIbarra";
$contraseña = "A.1iomT*vgE_";
$basedatos = "formulario"

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $basedatos) or die("no se pudo conectar a la base de datos");
$consulta = "insert into usuarios VALUES ('$nombre', '$apellidoP', '$apellidoM', '$Telefono', '$Correo', '$Contraseña')";
$registro = mysqli_query($conexion, $consulta) or die("problemas en la consulta");
$result = mysqli_fetch_array($registro, MYSQLI_ASSOC);
mysqli_close($conexion);
echo json_encode($result);
?>