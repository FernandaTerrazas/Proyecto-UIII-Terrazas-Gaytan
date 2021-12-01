<?php

include("conexion.php");
$con=conectar();

$gigas=$_GET['id'];

$sql="DELETE FROM paquetes  WHERE gigas ='$gigas'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paquetes.php");
    }
?>