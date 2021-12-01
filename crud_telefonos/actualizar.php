<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM telefonos WHERE modelo='$id'";
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="modelo" value="<?php echo $row['modelo']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo" value="<?php echo $row['modelo']  ?>">
                                <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" value="<?php echo $row['marca']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                                <input type="text" class="form-control mb-3" name="color" placeholder="Color" value="<?php echo $row['color']  ?>">
                                <input type="text" class="form-control mb-3" name="ram" placeholder="RAM" value="<?php echo $row['ram']  ?>">
                                <input type="text" class="form-control mb-3" name="almacenamiento" placeholder="Almacenamiento" value="<?php echo $row['almacenamiento']  ?>">
                                <input type="text" class="form-control mb-3" name="sistemaoperativo" placeholder="Sistema Operativo" value="<?php echo $row['sistemaoperativo']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>