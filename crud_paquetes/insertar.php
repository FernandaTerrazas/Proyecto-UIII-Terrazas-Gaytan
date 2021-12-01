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


$sql= "INSERT INTO `paquetes`(`gigas`, `minutos`, `sms`, `vigencia`, `costo`, `mbredes`, `promociones`) 
VALUES ('$gigas','$minutos','$sms','$vigencia','$costo','$mbredes','$promociones')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: paquetes.php");
    
}else {
}
?>
