<?php

include 'conexion_android.php';
$titulo=$_POST['titulo'];
$ponente=$_POST['ponente'];
$fecha=$_POST['fecha'];
$lugar=$_POST['lugar'];
$resumen=$_POST['resumen'];

$consulta="INSERT INTO conferencias (titulo, ponente , fecha, lugar, resumen) VALUES ('$titulo', '$ponente', '$fecha', '$lugar', '$resumen')";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);

?>