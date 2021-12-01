<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM paquetes WHERE gigas='$id'";
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
                    
                                <input type="hidden" name="gigas" value="<?php echo $row['gigas']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="gigas" placeholder="Gigas" value="<?php echo $row['gigas']  ?>">
                                <input type="text" class="form-control mb-3" name="minutos" placeholder="Minutos" value="<?php echo $row['minutos']  ?>">
                                <input type="text" class="form-control mb-3" name="sms" placeholder="SMS" value="<?php echo $row['sms']  ?>">
                                <input type="text" class="form-control mb-3" name="vigencia" placeholder="Vigencia" value="<?php echo $row['vigencia']  ?>">
                                <input type="text" class="form-control mb-3" name="costo" placeholder="Costo" value="<?php echo $row['costo']  ?>">
                                <input type="text" class="form-control mb-3" name="mbredes" placeholder="MB Redes" value="<?php echo $row['mbredes']  ?>">
                                <input type="text" class="form-control mb-3" name="promociones" placeholder="Promociones" value="<?php echo $row['promociones']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>