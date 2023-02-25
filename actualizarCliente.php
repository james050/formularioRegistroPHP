<?php
include('cn,php');
$con=conectarse();

$nombre=$_GET['nombre'];
$sql="SELECT * FROM usuario WHERE nombre='$nombre'";
$resultado=mysqli_query($con, $sql);
$row=mysqli_query($resultado);


?>
php