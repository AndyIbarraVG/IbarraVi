<?php

include("conection.php");
$con=conectar();



    $Id = $_POST['id'];
    $Nombre = $_POST['nombre'];
    $Paterno = $_POST['paterno'];
    $Materno = $_POST['materno'];
    $Telefono = $_POST['telefono'];
    $Correo = $_POST['email'];


    $sql="UPDATE usuarios SET  Nombre='$Nombre',Paterno='$Paterno',Materno='$Materno', Telefono='$Telefono',Correo = '$Correo' WHERE Id='$Id'";
    $query=mysqli_query($con,$sql);

    if($query = true){
        Header("Location: index.php");
    }else{

    }


?>