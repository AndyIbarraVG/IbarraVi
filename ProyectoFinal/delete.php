<?php

include("conection.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE Id='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>