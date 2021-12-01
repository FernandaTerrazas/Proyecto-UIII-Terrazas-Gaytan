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

$sql=" UPDATE `telefonos` SET `modelo`='$modelo',`marca`='$marca',`precio`='$precio',`color`='$color',`ram`='$ram',
`almacenamiento`='$almacenamiento',`sistemaoperativo`='$sistemaoperativo' WHERE modelo = '$modelo'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: telefonos.php"); 
    }
?>