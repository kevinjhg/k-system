<?php


require_once('clases/clase_venta.php');
$obj=new venta();
$c=new conexion();
$conexion=$c->conecta();
 $sql="SELECT *  from `ventas`";
 
 
/*Envía una consulta a la base de datos*/
$resultado = mysqli_query($conexion,$sql);
 
// Obtenemos el número de filas
$totalventas = mysqli_num_rows($resultado);
 
// Imprimimos en pantalla el número generado

$sql2="SELECT   SUM(total_d) as TotalPrecios  FROM ventas";

$resultado=$conexion -> query($sql2);
$fila=$resultado->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo

$TotalPrecios=$fila['TotalPrecios'];

?>