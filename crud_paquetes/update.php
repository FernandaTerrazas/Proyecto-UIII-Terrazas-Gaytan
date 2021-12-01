<?php

include("conexion.php");
$con=conectar();

$gigas=$_POST['gigas'];
$minutos=$_POST['minutos'];
$sms=$_POST['sms'];
$vigencia=$_POST['vigencia'];
$costo=$_POST['costo'];
$mbredes=$_POST['mbredes'];
$promociones=$_POST['promociones'];

$sql= " UPDATE `paquetes` SET `gigas`='$gigas',`minutos`='$minutos',`sms`='$sms',`vigencia`='$vigencia',`costo`='$costo',
`mbredes`='$mbredes',`promociones`='$promociones' WHERE gigas = '$gigas'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: paquetes.php"); 
    }
?>