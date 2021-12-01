<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$fecha_nac=$_POST['fecha_nac'];
$genero=$_POST['genero'];


$sql="INSERT INTO `clientes`(`nombre`, `apellido`, `correo`, `telefono`, `direccion`, `fecha_nac`, `genero`) 
VALUES ('$nombre','$apellido','$correo','$telefono','$direccion','$fecha_nac','$genero')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>
