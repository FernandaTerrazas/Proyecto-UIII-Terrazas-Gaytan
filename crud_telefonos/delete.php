<?php

include("conexion.php");
$con=conectar();

$modelo=$_GET['id'];

$sql="DELETE FROM telefonos  WHERE modelo ='$modelo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: telefonos.php");
    }
?>