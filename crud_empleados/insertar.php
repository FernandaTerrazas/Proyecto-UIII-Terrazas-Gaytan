<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$fecha_nac=$_POST['fecha_nac'];
$area=$_POST['area'];

$sql="INSERT INTO `empleados`(`nombre`, `apellido`, `correo`, `telefono`, `direccion`, `fecha_nac`, `area`) 
VALUES ('$nombre','$apellido','$correo','$telefono','$direccion','$fecha_nac','$area')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleados.php");
    
}else {
}
?>
