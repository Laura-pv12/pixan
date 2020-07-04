<?php

include 'conexion_android.php';
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$edad=$_POST['edad'];
$fechaN=$_POST['fechaN'];
$password=$_POST['password'];
$academiaprov=$_POST['academiaprov'];
$tipo_usr=$_POST['tipo_usr'];

//$consulta="insert into usuarios values('".$nombre."','".$email."','".$usuario."','".$password."')";
$consulta="INSERT INTO datos (nombre, email, edad, fechaN,password, academiaprov,tipo_usr) VALUES ('$nombre', '$email', '$edad', '$fechaN', '$password', '$academiaprov', '$tipo_usr')";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>