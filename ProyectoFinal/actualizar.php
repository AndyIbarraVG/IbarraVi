<?php 
    include("conection.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuarios WHERE Id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container mt-5">
            <form action="update.php" method="POST">
                <input type="text" class="oculto" name="id" value="<?php echo $row['Id']  ?>">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                <input type="text" class="form-control" name="paterno" placeholder="Paterno" value="<?php echo $row['Paterno']  ?>">
                <input type="text" class="form-control" name="materno" placeholder="Materno" value="<?php echo $row['Materno']  ?>">
                <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="<?php echo $row['Telefono']  ?>">
                <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $row['Correo']  ?>">
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
        </div>
    </body>
</html>