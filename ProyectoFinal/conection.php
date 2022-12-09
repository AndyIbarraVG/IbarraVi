<?php
function conectar(){
    $host="localhost";
    $user="AndyIbarra";
    $pass="A.1iomT*vgE_";

    $bd="datos";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
