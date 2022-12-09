<?php
    $nombre=$_POST['nombreConsulta'];
    $servidor = "localhost";
    $usuario = "AndyIbarra";
    $contraseña = "A.1iomT*vgE_";
    $basedatos = "formulario"
    $conexion = mysqli_connect($servidor,$usuario,$contraseña,$basedatos) or die("no se pudo conectar a la base de datos");
    $consulta= "select * from usuarios where Nombre = '$nombre'";
    $registro= mysqli_query($conexion,$consulta) or die("problemas en la consulta");
    $result= mysqli_fetch_array($registro,MYSQLI_ASSOC);
    mysqli_close($conexion);
    echo json_encode($result);
?>