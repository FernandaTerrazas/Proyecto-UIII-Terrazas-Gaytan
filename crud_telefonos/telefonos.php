<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM telefonos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Telefonos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Inserte datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo">
                                    <input type="text" class="form-control mb-3" name="marca" placeholder="Marca">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="color" placeholder="Color">
                                    <input type="text" class="form-control mb-3" name="ram" placeholder="RAM">
                                    <input type="text" class="form-control mb-3" name="almacenamiento" placeholder="Almacenamiento">
                                    <input type="text" class="form-control mb-3" name="sistemaoperativo" placeholder="Sistema Operativo">
                                    
                                    <input type="submit" class="btn btn-primary"> <a href="/Proyecto_Terrazas_Telcel/index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Modelo</th>
                                        <th>Marca</th>
                                        <th>Precio</th>
                                        <th>Color</th>
                                        <th>RAM</th>
                                        <th>Almacenamiento</th>
                                        <th>Sistema Operativo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['modelo']?></th>
                                                <th><?php  echo $row['marca']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['color']?></th>
                                                <th><?php  echo $row['ram']?></th>
                                                <th><?php  echo $row['almacenamiento']?></th>
                                                <th><?php  echo $row['sistemaoperativo']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['modelo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['modelo'] ?>" class="btn btn-danger">Eliminar</a></th>                                
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