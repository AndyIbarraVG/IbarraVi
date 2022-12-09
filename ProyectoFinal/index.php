<!DOCTYPE html>
<?php 
    include("conection.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

    // $row=mysqli_fetch_array($query);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5 ">
    <div class="row d-flex d-flex justify-content-center align-items-center"> 
        <div class="col-md-8 p-4 card shadow">
            <h2 class="mb-3 text-center">Agregar Usuario</h2>
                <form action="insertar.php" method="POST">
                    <div class="mb-2 row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-4">
                        <input type="text" class="form-control mb-3" name="paterno" placeholder="Apellido Paterno">
                        </div>
                        <div class="form-group col-md-4">
                        <input type="text" class="form-control mb-3" name="materno" placeholder="Apellido Materno">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                        </div>    
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary">
                </form>
        </div>
        <div class="mt-4 col-md-12">
            <table class="table" >
                <thead class="table-success table-striped" >
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido Materno</th>
                        <th>Apellido Paterno</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php  echo $row['Id']?></th>
                                <th><?php  echo $row['Nombre']?></th>
                                <th><?php  echo $row['Paterno']?></th>
                                <th><?php  echo $row['Materno']?></th>
                                <th><?php  echo $row['Telefono']?></th>    
                                <th><?php  echo $row['Correo']?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['Id'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['Id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                            </tr>
                        <?php 
                            }
                        ?>
                </tbody>
            </table>
        </div>
    </div>  
</div>
    
</body>
</html>