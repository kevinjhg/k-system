<?php 
require_once '../conexionbd/conexion.php';
require_once '../empresa/usuario.php';



    $idproductos =$_POST['idproductos'];
  	$nombre =$_POST['nombre'];
    $cantidad =$_POST['cantidad'];
    $precio=$_POST["precio"];
  
  
  $datos = array(
    $idproductos,
    $nombre,
    $cantidad,
    $precio

   
);

$obj=new usuario();

/*botones hidden de actualizar registro*/


/*REQUEST SIRVE PARA TRAER POR POST Y GET*/
$funcion=$_REQUEST['funcion'];
$idproductos2=$_POST['idproductos2'];
$p=$_GET['p'];
$estado=$_POST['estado'];

/*instancia*/
$c =new conexion();
  $conexion=$c->conecta();

 
  
if ($funcion=="modificar") {

   $sql=" UPDATE productos set idproductos='$idproductos', nombre='$nombre',cantidad='$cantidad',precio='$precio',estado='$estado' where idproductos='$idproductos2'";
  $sql=mysqli_query($conexion,$sql);
    header("location:tabla_prod.php");    
}

 






 ?>