<?php 
include 'conexion_android.php';

$sql = "SELECT * FROM conferencias ";
mysqli_set_charset($conexion, "utf8"); 

if(!$result = mysqli_query($conexion, $sql)) die();

$conferencias = array(); 

while($row = mysqli_fetch_array($result)) 
{ 
    $id_conferencia=$row['id_conferencia'];
    $titulo=$row['titulo'];  
    $ponente=$row['ponente'];
    $fecha=$row['fecha'];
    $lugar=$row['lugar'];
    $resumen=$row['resumen'];  
    
    $conferencias[] = array('id_conferencia'=> $id_conferencia, 'titulo'=> $titulo, 'ponente'=> $ponente,'fecha'=> $fecha,'lugar'=> $lugar,'resumen'=> $resumen);
}
    
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
$json_string = json_encode($conferencias);
echo $json_string;

?>