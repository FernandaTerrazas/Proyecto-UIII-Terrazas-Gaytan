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

$sql= "UPDATE `clientes` SET `nombre`='$nombre',`apellido`='$apellido',`correo`= '$correo',`telefono`='$telefono',
`direccion`='$direccion', `fecha_nac`='$fecha_nac',`genero`='$genero' WHERE Nombre = '$nombre'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: clientes.php"); 
    }
?>