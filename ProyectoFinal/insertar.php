<?php  
include("conection.php");
$con = conectar();
$Nombre = $_POST['nombre'];
$Paterno = $_POST['paterno'];
$Materno = $_POST['materno'];
$Telefono = $_POST['telefono'];
$Correo = $_POST['email'];

if (isset($_POST['submit'])) {
    if(empty($Nombre) || empty($Paterno) || empty($Materno) || empty($Telefono) || empty($Correo)){
        Header("Location: index.php");
    }
    else{
        $sql = "INSERT INTO usuarios (Nombre, Paterno, Materno, Telefono, Correo)VALUES('$Nombre', '$Paterno', '$Materno', '$Telefono' , '$Correo')";
        $query = mysqli_query($con, $sql);
        if($query){
            Header("Location: index.php"); 
        }
        else {
        }
    }
}