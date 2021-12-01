<?php
include("conexion.php");
$con=conectar();

$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$precio=$_POST['precio'];
$color=$_POST['color'];
$ram=$_POST['ram'];
$almacenamiento=$_POST['almacenamiento'];
$sistemaoperativo=$_POST['sistemaoperativo'];


$sql="INSERT INTO `telefonos`(`modelo`, `marca`, `precio`, `color`, `ram`, `almacenamiento`, `sistemaoperativo`) 
VALUES ('$modelo','$marca','$precio','$color','$ram','$almacenamiento','$sistemaoperativo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: telefonos.php");
    
}else {
}
?>
