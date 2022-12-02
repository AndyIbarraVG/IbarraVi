<?php
session_start();
$user = $_POST['usuario'];
$pass = $_POST['contraseña'];
if(isset($_SESSION['usuario'])){
    printf("Reanudando sesión <br>");
    printf("Bienvenido de nuevo ".$_SESSION['usuario']);
}else{
    $_SESSION['usuario'] = $user;
    printf("Nueva sesión <br>");
    printf("Bienvenido %s ",$user);
}
?>